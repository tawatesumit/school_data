<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link" >
    SCHOOL MANAGEMENT
  </a>
  <?php
  $url = array();
  $url_path=uri_string();
  if($url_path!=""){
    $url = explode("/",$url_path);
  }
        // print_r($url);
  ?>
  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>school_details" class="nav-link <?php if($url[0]=="school_details"){ echo "active"; } ?>">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                School List
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>