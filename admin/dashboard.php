<?php
session_start();
include '../functions.php';

if (!isset($_SESSION['user_id']) || ($_SESSION['user_livel'] != 2)) {
    header("Location: ../index.php");
}
logout();
creaUser();
?>


<!DOCTYPE html>
<html lang="it">

<?php include "../links.php"; ?>

<body>

    <!-- Navigation Bar-->
    <?php include "../topmenu.php"; ?>
    <!-- End Navigation Bar-->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="wrapper">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row" >
                <div class="col-12" >
                    <div class="page-title-box">
                        <!--
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Starter</li>
                            </ol>
                        </div> -->
                        <h4 class="page-title text-center"> <i class="fas fa-user-check text-info"></i> Crea User</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="col-lg-12 col-xl-12">
                <div class="card-box text-center">
                    <form action="dashboard.php" method="POST" data-parsley-validate="">
                  <div class="row"> 
                        <div class="form-group mb-4 col-3"  >
                        <label  class=""> <i class="fab fa-audible text-info"></i> Nome: </label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                        </div>
                        <div class="form-group mb-4 col-3">
                        <label  class=""> <i class="fab fa-audible text-info"></i> Cognome:</label>
                            <input type="text" class="form-control" id="cognome" name="cognome" placeholder="Cognome" required>
                        </div>
                        <div class="form-group mb-4 col-3">
                        <label  class=""> <i class="fab fa-audible text-info"></i> Username:</label>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Username" required  data-parsley-minlength="8">
                        </div>
                        <div class="form-group mb-4 col-3" >
                        <label  class=""><i class="fab fa-audible text-info"></i> Password:</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" required  data-parsley-minlength="8"> 
                        </div>
                        </div>
                      <div class="row">  
                      <div class="form-group mb-4 col-3">
                              <label  class=""><i class="fab fa-audible text-info"></i> Email:</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                      
                        <div class="form-group mb-4 col-3">
                        <label  class=""> <i class="fab fa-audible text-info"></i> Telefono:</label>
                            <input type="text" name="telefono" class="form-control" id="telefono"
                                placeholder="Telefono" required>
                        </div>
                        <div class="form-group mb-4 col-3">
                        <label  class=""> <i class="fab fa-audible text-info"></i> Città:</label>
                            <input type="text" name="citta" class="form-control" id="citta" placeholder="Città" required>
                        </div>
                        <div class="form-group mb-4 col-3">
                        <label  class=""><i class="fab fa-audible text-info"></i> Provincia</label>
                            <input type="text" name="provincia" class="form-control" id="provincia"
                                placeholder="Provincia" required>
                        </div>
                      </div>
                      
                        <div class="form-group mb-4 col-12  ">
                      <center> 
                            <label  class="col-4"><i class="fab fa-audible text-info"></i> Regione:</label>
                            <input type="text" name="regione" class="form-control col-4" id="regione" placeholder="Regione" required>
                            </center>
                        </div>
                        <center>
                        <button type="submit" name="submit" class="btn btn-sm btn-block btn-success col-3"><i class="fas fa-user-check"></i> Crea utente</button>
                        </center>
                    </form>


                </div>


            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
        <?php include "../footer.php"; ?>

        <?php include "../scripts.php"; ?>
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