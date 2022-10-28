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
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>/superadmin/dashboard" class="nav-link <?php if($url[0]=="dashboard"){ echo "active"; } ?>">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          
          <li class="nav-item <?php if($url[0]=="admin" || $url[0]=="organization" || $url[0]=="projectmst" || $url[0]=="state" || $url[0]=="district" ||$url[0]=="pincode" || $url[0]=="occupation" || $url[0]=="education" || $url[0]=="relation" || $url[0]=="medication" || $url[0]=="cancer_type" || $url[0]=="diseasetype" || $url[0]=="disease" || $url[0]=="examination" || $url[0]=="diagnosis" || $url[0]=="response" || $url[0]=="surgery" || $url[0]=="tissuesite" || $url[0]=="stain" || $url[0]=="sitebiopsy" || $url[0]=="histology" || $url[0]=="ihc" || $url[0]=="tumorepicenter" || $url[0]=="pm" || $url[0]=="pn" || $url[0]=="pt" || $url[0]=="drugs" || $url[0]=="gene" || $url[0]=="cavity" || $url[0]=="symptoms" || $url[0] == "homesettings" || $url[0] == "slider"){ echo "menu-open"; } ?>">

            <a href="#" class="nav-link <?php if($url[0]=="admin" || $url[0]=="organization" || $url[0]=="projectmst" || $url[0]=="state" || $url[0]=="district" || $url[0]=="pincode" || $url[0]=="occupation" || $url[0]=="education" || $url[0]=="relation" || $url[0]=="medication" || $url[0]=="cancer_type" || $url[0]=="diseasetype" || $url[0]=="disease" || $url[0]=="examination" || $url[0]=="diagnosis" || $url[0]=="response" || $url[0]=="surgery" || $url[0]=="tissuesite" || $url[0]=="stain" || $url[0]=="sitebiopsy" || $url[0]=="histology" || $url[0]=="ihc" || $url[0]=="tumorepicenter" || $url[0]=="pm" || $url[0]=="pn" || $url[0]=="pt" || $url[0]=="drugs" || $url[0]=="gene" || $url[0]=="cavity" || $url[0]=="symptoms" || $url[0] == "homesettings" || $url[0] == "slider"){ echo "active"; } ?>">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Database Masters
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>/admin" class="nav-link <?php if($url[0]=="admin"){ echo "active"; } ?>">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    User Master
                    <!-- <span class="right badge badge-danger">New</span> -->
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>/organization" class="nav-link <?php if($url[0]=="organization"){ echo "active"; } ?>">
                  <i class="nav-icon fas fa-briefcase"></i>
                  <p>
                    Organization Master
                    <!-- <span class="right badge badge-danger">New</span> -->
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>/projectmst" class="nav-link <?php if($url[0]=="projectmst"){ echo "active"; } ?>">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Project Master
                    <!-- <span class="right badge badge-danger">New</span> -->
                  </p>
                </a>
              </li>
              
              <li class="nav-item <?php if($url[0]=="state" || $url[0]=="district" || $url[0]=="pincode" || $url[0]=="occupation" || $url[0]=="education" || $url[0]=="relation" || $url[0]=="medication" || $url[0]=="cancer_type" || $url[0]=="diseasetype" || $url[0]=="disease" || $url[0]=="examination"){ echo "menu-open"; } ?>">
                <a href="#" class="nav-link <?php if($url[0]=="state" || $url[0]=="district" || $url[0]=="pincode" || $url[0]=="occupation" || $url[0]=="education" || $url[0]=="relation" || $url[0]=="medication" || $url[0]=="cancer_type" || $url[0]=="diseasetype" || $url[0]=="disease" || $url[0]=="examination"){ echo "active"; } ?>" <?php if($url[0]=="state" || $url[0]=="district" || $url[0]=="occupation" || $url[0]=="education" || $url[0]=="relation" || $url[0]=="medication" || $url[0]=="cancer_type" || $url[0]=="diseasetype" || $url[0]=="disease" || $url[0]=="examination"){ echo "style=\"background-color:#60aaf7;color:#fff\""; } ?>>
                  <i class="nav-icon fas fa-database"></i>
                  <p>
                    Patient Masters
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/state" class="nav-link <?php if($url[0]=="state"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>State Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/district" class="nav-link <?php if($url[0]=="district"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>District Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/pincode" class="nav-link <?php if($url[0]=="pincode"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pincode Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/occupation" class="nav-link <?php if($url[0]=="occupation"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Occupation Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/education" class="nav-link <?php if($url[0]=="education"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Education Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/relation" class="nav-link <?php if($url[0]=="relation"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Relation Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/medication" class="nav-link <?php if($url[0]=="medication"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Medication Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/cancer_type" class="nav-link <?php if($url[0]=="cancer_type"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Cancer Type Master</p>
                    </a>
                  </li>
                  <!-- <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/diseasetype" class="nav-link <?php if($url[0]=="diseasetype"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Disease Type Master</p>
                    </a>
                  </li> -->
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/disease" class="nav-link <?php if($url[0]=="disease"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Comorbidity Master</p>
                    </a>
                  </li>
                  <!-- <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/examination" class="nav-link <?php if($url[0]=="examination"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Examination Master</p>
                    </a>
                  </li> -->
                  <!-- <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/response" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Response Master</p>
                    </a>
                  </li> -->
                </ul>
              </li>

              <li class="nav-item <?php if($url[0]=="drugs" || $url[0]=="rttype" || $url[0]=="response" || $url[0]=="surgery"){ echo "menu-open"; } ?>">
                <a href="#" class="nav-link <?php if($url[0]=="state" || $url[0]=="rttype" || $url[0]=="response" || $url[0]=="surgery"){ echo "active"; } ?>" <?php if($url[0]=="state" || $url[0]=="rttype" || $url[0]=="response" || $url[0]=="surgery"){ echo "style=\"background-color:#60aaf7;color:#fff\""; } ?>>
                  <i class="nav-icon fas fa-database"></i>
                  <p>
                    Clinical Masters
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/drugs" class="nav-link <?php if($url[0]=="drugs"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Drugs Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/rttype" class="nav-link <?php if($url[0]=="rttype"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>RT Type Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/response" class="nav-link <?php if($url[0]=="response"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Response Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/surgery" class="nav-link <?php if($url[0]=="surgery"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Surgery Master</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item <?php if($url[0]=="tissuesite" || $url[0]=="stain" || $url[0]=="sitebiopsy" || $url[0]=="ihc" || $url[0]=="tumorepicenter" || /*$url[0]=="pm" || $url[0]=="pn" || $url[0]=="pt"*/ $url[0]=="tnm" || $url[0]=="gene" || $url[0]=="histology"){ echo "menu-open"; } ?>">
                <a href="#" class="nav-link <?php if($url[0]=="tissuesite" || $url[0]=="stain" || $url[0]=="sitebiopsy" || $url[0]=="ihc" || $url[0]=="tumorepicenter" || $url[0]=="pm" || $url[0]=="pn" || $url[0]=="pt" || $url[0]=="gene" || $url[0]=="histology"){ echo "active"; } ?>" <?php if($url[0]=="tissuesite" || $url[0]=="stain" || $url[0]=="sitebiopsy" || $url[0]=="ihc" || $url[0]=="tumorepicenter" || $url[0]=="pm" || $url[0]=="pn" || $url[0]=="pt" || $url[0]=="gene" || $url[0]=="node" || $url[0]=="printerips" || $url[0]=="histology"){ echo "style=\"background-color:#60aaf7;color:#fff\""; } ?>>
                  <i class="nav-icon fas fa-database"></i>
                  <p>
                    Pathology Masters
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/tissuesite" class="nav-link <?php if($url[0]=="tissuesite"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Site Classification</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/stain" class="nav-link <?php if($url[0]=="stain"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Stain Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/sitebiopsy" class="nav-link <?php if($url[0]=="sitebiopsy"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Site Master</p>
                    </a>
                  </li>
                  <!-- <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/ihc" class="nav-link <?php if($url[0]=="ihc"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>IHC Master</p>
                    </a>
                  </li> -->
                  <!-- <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/tumorepicenter" class="nav-link <?php if($url[0]=="tumorepicenter"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tumor Epicenter Master</p>
                    </a>
                  </li> -->
                  <!-- <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/pm" class="nav-link <?php if($url[0]=="pm"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>pM Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/pn" class="nav-link <?php if($url[0]=="pn"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>pN Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/pt" class="nav-link <?php if($url[0]=="pt"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>pT Master</p>
                    </a>
                  </li> -->
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/histology" class="nav-link <?php if($url[0]=="histology"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Histology Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/gene" class="nav-link <?php if($url[0]=="gene"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Gene Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/node" class="nav-link <?php if($url[0]=="node"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Node Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/printerips" class="nav-link <?php if($url[0]=="printerips"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Printer IP Address Master</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item <?php if($url[0]=="cavity" || $url[0]=="symptoms"){ echo "menu-open"; } ?>">
                <a href="#" class="nav-link <?php if($url[0]=="cavity" || $url[0]=="symptoms"){ echo "active"; } ?>" <?php if($url[0]=="cavity" || $url[0]=="symptoms"){ echo "style=\"background-color:#60aaf7;color:#fff\""; } ?>>
                  <i class="nav-icon fas fa-database"></i>
                  <p>
                    Radiology Masters
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/cavity" class="nav-link <?php if($url[0]=="cavity"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Cavity Master</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/symptoms" class="nav-link <?php if($url[0]=="symptoms"){ echo "active"; } ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Symptoms Master</p>
                    </a>
                  </li>

                </ul>
              </li>

              <li class="nav-item <?php if($url[0]=="homesettings" || $url[0]=="slider"){ echo "menu-open"; } ?>">
                <a href="#" class="nav-link <?php if($url[0]=="homesettings" || $url[0]=="slider"){ echo "active"; } ?>" <?php if($url[0]=="homesettings" || $url[0]=="slider"){ echo "style=\"background-color:#60aaf7;color:#fff\""; } ?>>
                  <i class="nav-icon fas fa-database"></i>
                  <p>
                    Landing Page
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/homesettings" class="nav-link <?php if($url[0]=="homesettings"){ echo "active"; } ?>">
                      <i class="nav-icon fas fa-cog"></i>
                      <p>
                        Home Settings
                        <!-- <span class="right badge badge-danger">New</span> -->
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/slider" class="nav-link <?php if($url[0]=="slider"){ echo "active"; } ?>">
                      <i class="nav-icon fas fa-cog"></i>
                      <p>
                        Home Slider
                        <!-- <span class="right badge badge-danger">New</span> -->
                      </p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url(); ?>/project" class="nav-link <?php if($url[0]=="project"){ echo "active"; } ?>">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Projects
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>/logout" class="nav-link">
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