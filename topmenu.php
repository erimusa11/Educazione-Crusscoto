      <!-- Navigation Bar-->
      <header id="topnav" style=" background:   #00f26012;;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0575e61c, #00f26038)  /* Chrome 10-25, Safari 5.1-6 */
background:linear-gradient(to right, #0575e61c, #00f26038);; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">

          <!-- Topbar Start -->
          <div class="navbar-custom" style=" background: #00F260;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0575E6, #00F260);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #0575E6, #00F260); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
              <div class="container-fluid">
                  <ul class="list-unstyled topnav-menu float-right mb-0">

                      <li class="dropdown notification-list">
                          <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                              role="button" aria-haspopup="false" aria-expanded="false">
                              <span class="pro-user-name ml-1 text-light">
                                  <?php echo $_SESSION['user_name'] . ' ' . $_SESSION['user_surname']; ?> <i
                                      class="mdi mdi-chevron-down"></i>
                              </span>
                              <i class="fe-settings noti-icon text-light"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                              <!-- item-->
                              <div class="dropdown-item noti-title">
                                  <h5 class="m-0">
                                      Benvenuto !
                                  </h5>
                              </div>
                              <div class="dropdown-divider"></div>
                              <!-- item-->
                              <form method="POST" action="dashboard.php">
                                  <button type="submit" name="logout" class="dropdown-item notify-item">
                                      <i class="fe-log-out"></i>
                                      <span>Logout</span>
                                  </button>
                              </form>
                          </div>
                      </li>

                  </ul>

                  <!-- LOGO -->
                  <div class="logo-box">
                      <a href="index.html" class="logo text-center">
                          <span class="logo-lg">
                              <img src="https://www.mappastrategica.it/dashboard/image/logo.png" alt="" height="50">
                              <!-- <span class="logo-lg-text-dark">Upvex</span> -->
                          </span>
                          <span class="logo-sm">
                              <!-- <span class="logo-sm-text-dark">X</span> -->
                              <img src="/assets/images/logo-sm.png" alt="" height="28">
                          </span>
                      </a>
                  </div>
                  <div class="clearfix"></div>
              </div>
          </div>
          <!-- end Topbar -->
          <?php if ($_SESSION['user_livel'] == 2) { ?>
          <div class="topbar-menu">
              <div class="container-fluid">
                  <div id="navigation">
                      <!-- Navigation Menu-->
                      <ul class="navigation-menu">

                          <li class="has-submenu">
                              <a href="dashboard.php" class="text-dark">
                                  <i class="la la-dashboard"  ></i>Dashboards</a>
                          </li>
                    
                          <li  >
                              <a href="modificauser.php" class="text-dark">
                                  <i class="la la-dashboard "></i>Modifica User  </a>
                          </li>

                      </ul>
                      <!-- End navigation menu -->
                      <div class="clearfix"></div>
                  </div>
                  <!-- end #navigation -->
              </div>
              <!-- end container -->
          </div>
          <!-- end navbar-custom -->
          <?php } ?>
      </header>
      <!-- End Navigation Bar-->

      <!--**********************************************************************************************************************************************************************************************************


  This site was  Developed By 
                              //******  You can find us on ****//

                      //!  Eri Musa  
           //? Website  : http://dilavermusa.com/
           //? Linkedin : https://www.linkedin.com/in/eri-musa-681332181/


                  //!    Alban Delishi 
         //?  Linkedin : :https://www.linkedin.com/in/alban-delishi-22b485186

                

 ********************************************************************************************************************************************************************************************************** --->