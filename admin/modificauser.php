<?php
session_start();
include '../functions.php';

if (!isset($_SESSION['user_id']) || ($_SESSION['user_livel'] != 2)) {
    header("Location: ../index.php");
}
logout();
modificaUser();
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
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <!--<div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Starter</li>
                            </ol>
                        </div> -->
                        <h4 class="page-title">Modifica User</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="col-lg-8 col-xl-8">
                <div class="card-box text-center">
                    <form action="modificauser.php" method="POST">
                        <div class="form-group mb-4">
                            <select name="user" id="user"
                                class="selectpicker form-control col-lg-12 col-md-12 col-sm-12 col-12"
                                data-live-search="true" title="Scegli user">
                                <?php
                                global $connection;
                                mysqli_set_charset($connection, "utf8");
                                $query = "SELECT user_id, user_name, user_surname FROM users WHERE user_livel = 1 ";
                                $result = mysqli_query($connection, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                    $id = $row['user_id'];
                                    $fullName = $row['user_name'] . ' ' . $row['user_surname'];
                                    $ffullName = utf8_encode($fullName);
                                    echo '<option value=' . $id . '>' . $fullName . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group mb-3" id="appHere"></div>
                        <button type="submit" name="submit" class="btn btn-primary mt-3">Modifica</button>
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
        <script>
        $(document).ready(function() {

            $('#user').on('change', function() {
                var id = $('#user').val();
                $.ajax({
                    url: 'showUser.php',
                    dataType: "JSON",
                    data: {
                        'id': id
                    },
                    success: function(data) {
                        theme = '';
                        for (var i = 0; i < data.length; i++) {
                            theme = theme +
                                `<div class="form-group row mb-4">
                        <label for="name" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Name:</label><div class="col-xl-10 col-lg-9 col-sm-10"><input type="text" class="form-control mb-2" name="name" id="name" value="${data[i].name}"></div></div>`;
                            theme = theme +
                                `<div class="form-group row mb-4">
                        <label for="lastname" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Lastname:</label><div class="col-xl-10 col-lg-9 col-sm-10"><input type="text" class="form-control mb-2" name="lastname" id="lastname" value="${data[i].lastname}"></div></div>`;
                            theme = theme +
                                `<div class="form-group row mb-4"><label for="username" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Username:</label><div class="col-xl-10 col-lg-9 col-sm-10"><input type="text" class="form-control mb-2" name="username" id="username" value="${data[i].username}"></div></div>`;
                            theme = theme +
                                `<div class="form-group row mb-4">
                        <label for="password" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Password:</label><div class="col-xl-10 col-lg-9 col-sm-10"><input type="text" class="form-control mb-2" name="password" id="password" value="${data[i].password}"></div></div>`;
                            theme = theme +
                                `<div class="form-group row mb-4">
                        <label for="lastname" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Email:</label><div class="col-xl-10 col-lg-9 col-sm-10"><input type="text" class="form-control mb-2" name="email" id="email" value="${data[i].email}"></div></div>`;
                            theme = theme +
                                `<div class="form-group row mb-4">
                        <label for="lastname" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Phone:</label><div class="col-xl-10 col-lg-9 col-sm-10"><input type="text" class="form-control mb-2" name="phone" id="phone" value="${data[i].phone}"></div></div>`;
                            theme = theme +
                                `<div class="form-group row mb-4">
                        <label for="citta" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Citta:</label><div class="col-xl-10 col-lg-9 col-sm-10"><input type="text" class="form-control mb-2" name="citta" id="citta" value="${data[i].citta}"></div></div>`;
                            theme = theme +
                                `<div class="form-group row mb-4">
                        <label for="provincia" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Provincia:</label><div class="col-xl-10 col-lg-9 col-sm-10"><input type="text" class="form-control mb-2" name="provincia" id="provincia" value="${data[i].provincia}"></div></div>`;
                            theme = theme +
                                `<div class="form-group row mb-4">
                        <label for="regione" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Regione:</label><div class="col-xl-10 col-lg-9 col-sm-10"><input type="text" class="form-control mb-2" name="regione" id="regione" value="${data[i].regione}"></div></div>`;
                        }
                        $('#appHere').html(theme);
                    },
                    error: function(data) {
                        alert('error');
                    },
                });
            });
        })
        </script>
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