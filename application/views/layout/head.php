<?php 
  // print_r($_SESSION);
  if(!isset($this->session->user_id)){
    $this->session->set_flashdata('status','Session Expired');
    return redirect('login');
  }
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
        <li class="nav-item">
          <div class="col-sm-12">
            <div class="form-group">
            </div>
          </div>
        </li>
    </ul>
    
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link text-dark" href="#">
        <i class="far fa-user"></i>
      </a>
    </li>
  </ul>
</nav>