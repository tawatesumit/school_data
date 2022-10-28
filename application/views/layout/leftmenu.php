<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link" style="background-color:#fff;">
    <img src="<?php echo base_url(); ?>/public/assets/sidelogo2.png" alt="AdminLTE Logo" class="brand-image" >
    <span class="brand-text font-weight-light">.</span>
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
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>/dashboard" class="nav-link <?php if($url[0]=="dashboard"){ echo "active"; } ?>">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Dashboard
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>