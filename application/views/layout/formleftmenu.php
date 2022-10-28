<?php
    // $project_id = "";$patient_id="";
    // print_r($project_id);
?>
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
      <!-- Sidebar user (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>/public/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">CIB</a>
        </div>
      </div> -->

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> -->
          <?php 
              $patient_id_value="";
              if(isset($patient_id_enc)){ 
                  $patient_id_value="/".$patient_id_enc;
              }
              $project_id_value="";
              if(isset($project_id_enc)){ 
                  $project_id_value="/".$project_id_enc;
              }
          ?>
          <li class="nav-item <?php if($url[0]=="patientinfo" || $url[0]=="clinicalinfo" || $url[0]=="lungtumor" || $url[0]=="lungres" || $url[0]=="headneck" || $url[0]=="headneckres" || $url[0]=="radiologylung" || $url[0]=="radiologyheadneck"){ echo "menu-open"; } ?>">

            <a href="#" class="nav-link <?php if($url[0]=="patientinfo" || $url[0]=="clinicalinfo" || $url[0]=="lungtumor" || $url[0]=="lungres" || $url[0]=="headneck" || $url[0]=="headneckres" || $url[0]=="radiologylung" || $url[0]=="radiologyheadneck"){ echo "active"; } ?>">
              <i class="nav-icon fas fa-briefcase-medical"></i>
              <p><?= !empty($project_name) ? $project_name : '' ?></p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <?php if(isset($patient_id)){ ?>
            <ul class="nav nav-treeview">
              <li class="nav-item <?php if($url[0]=="patientinfo" || $url[0]=="clinicalinfo" || $url[0]=="lungtumor" || $url[0]=="lungres" || $url[0]=="headneck" || $url[0]=="headneckres" || $url[0]=="radiologylung" || $url[0]=="radiologyheadneck"){ echo "menu-open"; } ?>">

                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    <?= !empty($patient_data['patientidentifier']) ? $patient_data['patientidentifier'] : '' ?>
                  </p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/patientinfo/edit<?php echo $patient_id_value; ?><?php echo $project_id_value; ?>" class="nav-link <?php if($url[0]=="patientinfo"){ echo "active"; } ?>">
                      <i class="nav-icon fas fa-info"></i>
                      <p>
                        Baseline Patient Info
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url(); ?>/clinicalinfo/edit<?php echo $patient_id_value; ?><?php echo $project_id_value; ?>" class="nav-link <?php if($url[0]=="clinicalinfo"){ echo "active"; } ?>">
                      <i class="nav-icon fas fa-bars"></i>
                      <p>
                        Clinical Course Details
                      </p>
                    </a>
                  </li>
                  <li class="nav-item <?php if($url[0]=="lungtumor" || $url[0]=="lungres" || $url[0]=="headneck" || $url[0]=="headneckres"){ echo "menu-open"; } ?>">

                    <a href="#" class="nav-link <?php if($url[0]=="lungtumor" || $url[0]=="lungres" || $url[0]=="headneck" || $url[0]=="headneckres"){ echo "active"; } ?>">
                      <i class="nav-icon fas fa-bars"></i>
                      <p>
                        Pathology
                      </p>
                      <i class="fas fa-angle-left right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>/pathology_details<?php echo $patient_id_value; ?><?php echo $project_id_value; ?>" class="nav-link">
                          <i class="nav-icon fas fa-briefcase-medical"></i>
                          <p>
                            Pathology Details
                          </p>
                        </a>
                      </li>
                      <?php 
                        if ($project_id == 1) { ?>
                          <li class="nav-item">
                            <a href="<?php echo base_url(); ?>/lungtumor/edit<?php echo $patient_id_value; ?><?php echo $project_id_value; ?>" class="nav-link <?php if($url[0]=="lungtumor"){ echo "active"; } ?>">
                              <i class="nav-icon fas fa-bars"></i>
                              <p>
                                 Lung Tumor Biopsies
                              </p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="<?php echo base_url(); ?>/lungres/edit<?php echo $patient_id_value; ?><?php echo $project_id_value; ?>" class="nav-link <?php if($url[0]=="lungres"){ echo "active"; } ?>">
                              <i class="nav-icon fas fa-bars"></i>
                              <p>
                                 Lung Tumor Resection
                              </p>
                            </a>
                          </li>
                        <?php }

                        elseif($project_id == 2){ ?>

                          <li class="nav-item">
                            <a href="<?php echo base_url(); ?>/headneck/edit<?php echo $patient_id_value; ?><?php echo $project_id_value; ?>" class="nav-link <?php if($url[0]=="headneck"){ echo "active"; } ?>">
                              <i class="nav-icon fas fa-bars"></i>
                              <p>
                                 Head Neck Biopsies
                              </p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="<?php echo base_url(); ?>/headneckres/edit<?php echo $patient_id_value; ?><?php echo $project_id_value; ?>" class="nav-link <?php if($url[0]=="headneckres"){ echo "active"; } ?>">
                              <i class="nav-icon fas fa-bars"></i>
                              <p>
                                 Head Neck Resection
                              </p>
                            </a>
                          </li>
                          
                        <?php }
                      ?>
                    </ul>
                  </li>
                  <li class="nav-item <?php if($url[0]=="radiologylung" || $url[0]=="radiologyheadneck"){ echo "menu-open"; } ?>">

                    <a href="#" class="nav-link <?php if($url[0]=="radiologylung" || $url[0]=="radiologyheadneck"){ echo "active"; } ?>">
                      <i class="nav-icon fas fa-bars"></i>
                      <p>
                        Radiology
                      </p>
                      <i class="fas fa-angle-left right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                      <?php if($project_id == 1){ ?>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>/radiologylung/edit<?php echo $patient_id_value; ?><?php echo $project_id_value; ?>" class="nav-link <?php if($url[0]=="radiologylung"){ echo "active"; } ?>">
                          <i class="nav-icon fas fa-bars"></i>
                          <p>
                             Lung Cancer
                          </p>
                        </a>
                      </li>
                      <?php } ?>
                      <?php if($project_id == 2){ ?>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>/radiologyheadneck/edit<?php echo $patient_id_value; ?><?php echo $project_id_value; ?>" class="nav-link <?php if($url[0]=="radiologyheadneck"){ echo "active"; } ?>">
                          <i class="nav-icon fas fa-bars"></i>
                          <p>
                             Head Neck Dataset
                          </p>
                        </a>
                      </li>
                      <?php } ?>
                      <!-- <li class="nav-item">
                        <a href="<?php echo base_url(); ?>/patientlarynxhypopharynx/edit<?php echo $patient_id_value; ?><?php echo $project_id_value; ?>" class="nav-link">
                          <i class="nav-icon fas fa-briefcase-medical"></i>
                          <p>
                             Larynx and Hypopharynx
                          </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>/patientcarcinomatongue/edit<?php echo $patient_id_value; ?><?php echo $project_id_value; ?>" class="nav-link">
                          <i class="nav-icon fas fa-briefcase-medical"></i>
                          <p>
                             Carcinoma Tongue
                          </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>/patientcarcinomanasopharynx/edit<?php echo $patient_id_value; ?><?php echo $project_id_value; ?>" class="nav-link">
                          <i class="nav-icon fas fa-briefcase-medical"></i>
                          <p>
                             Carcinoma Nasopharynx
                          </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo base_url(); ?>/carcinomathyroidctimaging/edit<?php echo $patient_id_value; ?><?php echo $project_id_value; ?>" class="nav-link">
                          <i class="nav-icon fas fa-briefcase-medical"></i>
                          <p>
                             Thyroid CT Imaging
                          </p>
                        </a>
                      </li> -->
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
              <?php }else{ ?>
                <?php 
                  $project_id_value="";
                  if(isset($project_id_enc)){ 
                      $project_id_value="/".$project_id_enc;
                  } 
                ?>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?php echo base_url('/patientinfo/add'.$project_id_value); ?>" class="nav-link <?php if($url[0]=="patientinfo"){ echo "active"; } ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                          Baseline Patient Info
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" onclick="alert('Please fillup patient baseline form')" class="nav-link">
                        <i class="nav-icon fas fa-briefcase-medical"></i>
                        <p>
                          Patient Clinical Details
                        </p>
                      </a>
                    </li>
                  </ul>
                <?php } ?>          
            <!-- <li class="nav-item">
              <a href="<?php echo base_url(); ?>/slidelevelinfo/edit" class="nav-link">
                <i class="nav-icon fas fa-briefcase-medical"></i>
                <p>
                  Patient Slide Details
                </p>
              </a>
            </li> -->

            
            
            
            <!-- <li class="nav-item">
              <a href="<?php echo base_url(); ?>/gen_qrcode" class="nav-link">
                <i class="nav-icon fas fa-tasks"></i>
                <p>
                  Slide QR code
                  
                </p>
              </a>
            </li> -->

              <!-- <li class="nav-item">
                <a href="#" onclick="alert('Please fillup patient baseline form')" class="nav-link">
                  <i class="nav-icon fas fa-briefcase-medical"></i>
                  <p>
                    Patient Slide Details
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" onclick="alert('Please fillup patient baseline form')" class="nav-link">
                  <i class="nav-icon fas fa-briefcase-medical"></i>
                  <p>
                    Patient Head Neck
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" onclick="alert('Please fillup patient baseline form')" class="nav-link">
                  <i class="nav-icon fas fa-briefcase-medical"></i>
                  <p>
                    Patient Head Neck Resection
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" onclick="alert('Please fillup patient baseline form')" class="nav-link">
                  <i class="nav-icon fas fa-briefcase-medical"></i>
                  <p>
                    Patient Head Neck
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" onclick="alert('Please fillup patient baseline form')" class="nav-link">
                  <i class="nav-icon fas fa-briefcase-medical"></i>
                  <p>
                    Patient Lung Tumor 
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" onclick="alert('Please fillup patient baseline form')" class="nav-link">
                  <i class="nav-icon fas fa-briefcase-medical"></i>
                  <p>
                    Patient Lung Tumor Resection
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" onclick="alert('Please fillup patient baseline form')" class="nav-link">
                  <i class="nav-icon fas fa-tasks"></i>
                  <p>
                    Slide QR code
                  </p>
                </a>
              </li>  -->
          
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
          </li>
          
        </ul>
      </nav>
    </div>
  </aside>