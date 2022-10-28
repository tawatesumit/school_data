<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('School_list_model');
	}

	public function index()
	{
		$SiteSettingsModel = new SiteSettingsModel();
		$HomeSliderModel = new HomeSliderModel();

		$sliderdata = $HomeSliderModel->get();
		$data['slider'] = $sliderdata->getResult();
		
		$site_data = $SiteSettingsModel->where('id',1)->first();
		$data['site_data'] = $site_data;
		return view('index',$data);
	}

	public function login()
	{
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->view('register');
	}

	public function school_details()
	{
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->view('school_details');
	}

	public function check_login()
	{
		$this->load->library('form_validation');
		$this->load->library('session');
		$email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

		// $EncDecModel = new EncDecModel();
		// $password_encrypt = $EncDecModel->encrypt_data($password);

		// return view('admin/patient_details');
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email', $email);
		$query = $this->db->get();

        if($query->num_rows() > 0){
			$row = $query->row_array();

			// echo $query->num_rows(); die;
			$user_id=$row['id'];
			$name=$row['name'];
			$password_db=$row['password'];

	        	// $password_decrypt = $EncDecModel->decrypt_data($password_db);
	        	if($password_db==$password){
				    $_SESSION['user_id'] = $user_id;
				    $_SESSION['name'] = $name;
					
		        	return redirect('school_details')->with('status','');
		        }else{
		        	$this->session->set_flashdata('status','Wrong password');
	        		return redirect('login')->with('status','Wrong password');
	        	}
    	}else{
    		$this->session->set_flashdata('status','Invalid credentials');
        	return redirect('login')->with('status','Invalid credentials');
        }
	}

	public function store()
	{
		$this->load->library('form_validation');
		$this->load->helper('email');
		// $this->load->library('encrypt');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('email', 'Email', 'callback_mail_exists');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[15]|callback_chk_password_expression');

        if ($this->form_validation->run() != FALSE)
        {
        	$name = $this->input->post('name');
			$email_id = $this->input->post('email');
			$password = $this->input->post('password');
			$curr_date = date('Y-m-d H:m');
			$key = 'school_data';

			// $password_encrypt = $this->encrypt->encode($password, $key);

			$data = array(
			    'name' => $name,
		  		'email' => $email_id,
		  		'password' => $password,
		  		'created_at' => $curr_date,
			);

			$this->db->insert('users', $data);
			
			$this->load->library('session');
			$this->load->view('login');
		}
        else
        {
        	$this->load->library('session');
            $this->load->view('register');
        }
		
	}

	public function chk_password_expression($str)

    {
	    if (1 !== preg_match("/^.*(?=.{6,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $str))
	    {
	        $this->form_validation->set_message('chk_password_expression', '%s must be at least 6 characters and must contain at least one lower case letter, one upper case letter and one digit');
	        return FALSE;
	    }
	    else
	    {
	        return TRUE;
	    }
	}

	public function mail_exists($key)
    {
        $this->db->where('email',$key);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0){
        	$this->form_validation->set_message('mail_exists', 'Email Already Exists');
            return false;
        }
        else{
            return true;
        }
    }

	public function school_list(){
		$arrayList 	= [];
		$result 	= $this->School_list_model->getRows($this->input->post()); 
		$i 			= $this->input->post('start');
		foreach($result as $row) {
			$action = '
			<a href="'.base_url('school/edit?id='.$row->id).'" class="btn btn-sm btn-primary">
              <i class="fe-edit"></i> Edit</a>
			<button name="deleteButton" onclick="delete_data(\''.$row->id.'\')" class="btn btn-sm btn-danger">
              <i class="fe-trash"></i> Delete</button>
			';
			$arrayList [] = [
				++$i,
				$row->name,
				$row->location,
				$action
			];
		}
		$output = array(
			"draw" 				=> $this->input->post('draw'),
			"recordsTotal" 		=> $this->School_list_model->countAll(),
			"recordsFiltered"	=> $this->School_list_model->countFiltered($this->input->post()),
			"data" 				=> $arrayList,
		);

		echo json_encode($output);
	}

	public function addschool()
	{
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->view('create_school');
	}

	public function save()
	{
		$this->load->library('form_validation');
		$this->load->library('session');

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('location', 'Location', 'trim|required');

        if ($this->form_validation->run() != FALSE)
        {
        	$name = $this->input->post('name');
			$location = $this->input->post('location');
			$curr_date = date('Y-m-d H:m');
			$key = 'school_data';

			// $password_encrypt = $this->encrypt->encode($password, $key);

			$data = array(
			    'name' => $name,
		  		'location' => $location,
		  		'created_by' => $_SESSION['user_id'],
		  		'created_at' => $curr_date
			);

			$this->db->insert('school_list', $data);
			
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->view('school_details');
		}
        else
        {
        	$this->load->library('session');
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->load->view('create_school');
        }
		
	}

	public function update()
	{
		$this->load->library('form_validation');
		$this->load->library('session');

        if ($this->form_validation->run() != FALSE)
        {
        	$id = $this->input->post('id');
        	$name = $this->input->post('name');
			$location = $this->input->post('location');
			$curr_date = date('Y-m-d H:m');
			$key = 'school_data';

			// $password_encrypt = $this->encrypt->encode($password, $key);

			$data = array(
			    'name' => $name,
		  		'location' => $location,
		  		'updated_by' => $_SESSION['user_id'],
		  		'updated_at' => $curr_date
			);

			$this->db->where('id', $id);
			$this->db->update('school_list', $data);
			
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->view('school_details');
		}
        else
        {
        	$this->load->library('session');
			$this->load->helper('url');
			$this->load->view('school_details');
        }
		
	}

	public function delete()
	{
    	$id = $this->input->post('del_id');

		$this->db->where('id', $id);
		$result = $this->db->delete('school_list');

		// $this->db->last_query();
		if($result){
			echo "success";
		}else{
			echo "error";
		}
	}

	public function editschool()
	{
		$id = $this->input->get('id');
		$data = array();

		$this->db->select('*');
		$this->db->from('school_list');
		$this->db->where('id', $id);
		$query = $this->db->get();

        if($query->num_rows() > 0){
			$row = $query->row_array();
			$data['school_data'] = $row;
		}else{
			$data['school_data'] = array();
		}
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->view('edit_school', $data);
	}

	public function logout()
	{
		// $session = session();
		// $session->destroy();
		$this->load->library('session');
		$this->session->sess_destroy();
		return redirect('login');
	}
}
