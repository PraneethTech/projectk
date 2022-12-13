        <!-- Header -->
        <div class="header">
            <!-- Logo -->
            <div class="header-left">
                <a href="dashboard.php" class="logo">
                    <img src="assets/img/logo-small.png" alt="Logo">
                </a>
                <a href="dashboard.php" class="logo logo-small">
                    <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>
            <!-- /Logo -->
            
            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-align-left"></i>
            </a>
              <!-- Mobile Menu Toggle -->
              <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>

             <!-- Header Right Menu -->
             <ul class="nav user-menu">
                <li  class="nav-item dropdown has-arrow">
                <a href="logout.php"><i class="fas fa-sign-out-alt fa-2x"></i></a></li>
             </ul>
        </div>
        <!-- /Header -->
        
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title"> 
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user-graduate"></i> <span>DASHBOARD</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="admin_dashboard.php">HOME</a></li>
                                <li><a href="user_registration.php">NEW USER REGISTRATION</a></li>
                                <li><a href="existing.php">EXISTING USER REGISTRATION</a></li>
                                <!-- <li><a href="patient_bdetails.php">PATIENT DETAILS</a></li> -->
                            </ul>
                        </li>
                       
                       
                        <li class="submenu">
                            <a href="#"><i class="fas fa-cogs"></i> <span>SETTINGS</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="patient_details.php">Update Patient Profile</a></li>
                                <li><a href="search-usf.php">Update Surgery Profiles</a></li>
                               
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->