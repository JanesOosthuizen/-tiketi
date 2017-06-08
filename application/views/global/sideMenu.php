<!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <ul class="nav side-menu">
              <li><a href="<?php echo base_url(); ?>index.php/Dashboard"><i class="fa fa-home"></i> Home </a></li>
              <li><a><i class="fa fa-wrench"></i> JobCards <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="<?php echo base_url(); ?>index.php/Jobcard/addJobcard">Add Jobcards</a>
                  </li>
                  <li><a href="<?php echo base_url(); ?>index.php/Jobcard/viewJobcards">View Jobcards</a>
                  </li>
                </ul>
              </li>
<!--              <li><a><i class="fa fa-area-chart"></i> Reports <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="<?php echo base_url(); ?>index.php/Reports">Report</a>
                  </li>
                </ul>
              </li>-->
              <li><a><i class="fa fa-gear"></i> Settings <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url(); ?>index.php/Settings/generalSettings">General Settings</a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>index.php/Settings/manageDevices">Manage Devices</a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>index.php/Settings/manageSalesConsultants">Manage Salespersons</a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>index.php/Settings/manageTechnicians">Manage Technicians</a>
                    </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>