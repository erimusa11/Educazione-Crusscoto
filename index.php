<?php

session_cache_limiter('nocache');

session_start();

include 'functions.php';

login();

?>



<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg authentication-bg-pattern" style=" background: #093028;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #237A57, #093028);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #237A57, #093028); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto" style="">
                                <a href="index.php">
                                    <span><img src="https://www.mappastrategica.it/dashboard/image/logo.png" style="background: #0F2027;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2C5364, #203A43, #0F2027); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
" alt="" height="70"></span>
                                </a>
                                <p class="text-muted mb-4 mt-3">Inserisci il tuo indirizzo email e la password per
                                    accedere al pannello di amministrazione.</p>
                            </div>

                            <h5 class="auth-title text-success">Accessi alla piataforma</h5>

                            <form action="index.php" method="POST">

                                <div class="form-group mb-3">
                                    <label for="emailaddress"><i class="far fa-envelope text-success"></i> Username</label>
                                    <input class="form-control" type="text" id="emailaddress" required=""
                                        name="username" placeholder="Metti il username">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password"><i class="fas fa-key text-success"></i> Password</label>
                                    <input class="form-control" type="password" required="" id="password"
                                        name="password" placeholder="Metti il password">
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-success btn-block" type="submit" name="submit"> Log In
                                    </button>
                                </div>

                            </form>
                            <!--
                                <div class="text-center">
                                    <h5 class="mt-3 text-muted">Seguichi al </h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                        </li>
                                    </ul>
                                </div> -->

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    <footer class="footer footer-alt">
        <?php echo date('Y'); ?> &copy; Leonida Consulting srl
    </footer>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>
 <!--**********************************************************************************************************************************************************************************************************


  This site was  Developed By 
                              //******  You can find us on ****//

                      //!  Eri Musa  
           //? Website  : http://dilavermusa.com/
           //? Linkedin : https://www.linkedin.com/in/eri-musa-681332181/


                  //!    Alban Delishi 
         //?  Linkedin : :https://www.linkedin.com/in/alban-delishi-22b485186

              
 ********************************************************************************************************************************************************************************************************** --->
</html>