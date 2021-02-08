<?php
session_cache_limiter('nocache');
ob_start();
session_start();
include '../functions.php';

if (!isset($_SESSION['user_id']) || ($_SESSION['user_livel'] != 1)) {
    header("Location: ../index.php");
}
logout();
 play_video();
?>


<!DOCTYPE html>
<html lang="it">

<?php include "../links.php"; ?>
<?php include "../scripts.php";
                            //find the user datas
  global $connection;
  $user_id =  $_SESSION['user_id'];
  $find_step="SELECT * FROM users WHERE user_id='$user_id'";
  $find_step_result = mysqli_query($connection,$find_step);
  $row_find= mysqli_fetch_assoc( $find_step_result);

  
    question_one();
    question_tow();
    simonechangeStep();
    ?>

<body>
    <?php include "../topmenu.php";
     
   
  
    ?>
    <?php include "scripts.php";?>

    <?php
  // this is the alert after  srcond question
if (isset($_GET['error']) == true) {
    ?>
    <script>
    $(document).ready(function() {
        Swal.fire({
            title: "Congratulazioni!",
            text: "Risposte esatte  Guarda ora il secondo video ",
            type: "success",
            confirmButtonClass: "btn btn-confirm mt-2"
        });
    });
    </script>
    <?php
}
?>


    <?php
  // this is the alert after  srcond question
if (isset($_GET['errori']) == true) {
    ?>
    <script>
    $(document).ready(function() {
        Swal.fire({
            title: "Congratulazioni!",
            text: "Risposte esatte  Guarda ora il terzo video ",
            type: "success",
            confirmButtonClass: "btn btn-confirm btn-success mt-2"
        });
    });
    </script>
    <?php
}
?>
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="wrapper" style="
    padding-top: 70px;">
        <div class="container-fluid">


            <div class="col-12">
                <br>
                <?php if($_SESSION['user_id']==1){

 ?>    <form action="dashboard.php" method="POST">
    <div class="d-flex justify-content-around">   
  
                    <input class="btn btn-success btn-md" type="submit" name="chenge" value="Passa su video 1"> </input>
                    <input class="btn btn-success btn-md" type="submit" name="chenge" value="Passa su video 2"> </input>
                    <input class="btn btn-success btn-md" type="submit" name="chenge" value="Passa su video 3"> </input>
                 
                   
       </div> </form>
       <br>
<?php 

                } ?>
                <div class="card" style="border: 0.32mm ridge #00F260;;">
                    <div class="card-body">
                        <div id="rootwizard">
                            <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-3">
                                <li class="nav-item" data-target-form="#accountForm">
                                <h3>Corso Cruscotto di Controllo</h3>
                                    <a href="#first" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                        <i class="fas fa-video"></i>
                                        <span class="d-none d-sm-inline">
                                            <?php if($row_find['question_step']==1) { echo "Primo Video"; } else if ($row_find['question_step']==2){ echo "Secondo Video"; } else if($row_find['question_step']==3) { echo "Terzo Video";} ?>
                                        </span>
                                    </a>

                                </li>
                            </ul>

                            <div class="tab-content mb-0 b-0 pt-0">

                                <?php 

                        
                                        if($row_find['question_step']==1) { //this is the first step


                                     
                                    ?>
                                <div class="tab-pane" id="first">
                                    <form method="post" action="dashboard.php">
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="text" hidden
                                                    value="<?php echo $row_find['question_step'];?>" name="step">
                                                <input type="text" hidden value="<?php echo $_SESSION['user_id'];?>"
                                                    name="persons">

                                                <center>
                                                    <video class="col-lg-8 col-md-12  " height="330" controls="controls"
                                                        type="video/mp4" preload="none" id="video">
                                                        <source src="../video/parte1.mp4" autostart="false">
                                                        Questo browser non e suportato ...
                                                    </video>


                                                </center> <br>
                                                <br>
                                                <?php  
                                                 global $connection;  //find the fist question
                                                $find_question="SELECT * FROM questions_table WHERE question_id=1";
                                                $result_question = mysqli_query($connection,$find_question);
                                                $row_question=mysqli_fetch_assoc($result_question);
                                                $question_id =  $row_question['question_id'];
                                                $question_text =  $row_question['question_text'];
                                                ?>
                                                <input type="text" hidden value="<?php echo $question_id;?>"
                                                    name="keyquestion">
                                                <label class="col-12 text-center col-form-label   " for="confirm3">
                                                    <?php echo $question_text;?> </label>
                                                <br>
                                                <br>
                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="userName3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success  ">
                                                            <input type="radio" class="first_answer" name="first_answer"
                                                                id="radio1" value="Indici CNDCEC" required>
                                                            <label for="radio1">
                                                                Indici CNDCEC
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="password3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success  ">
                                                            <input type="radio" class="first_answer" name="first_answer"
                                                                id="radio2" value="2086 secondo comma" required>
                                                            <label for="radio2">
                                                                2086 secondo comma
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="confirm3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success ">
                                                            <input type="radio" class="first_answer" name="first_answer"
                                                                id="radio3" value="Altre disposizoni" required>
                                                            <label for="radio3">
                                                                Altre disposizoni
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>

                                                <?php  
                                                 global $connection;  //find the seco question 
                                                $find_question="SELECT * FROM questions_table WHERE question_id=2";
                                                $result_question = mysqli_query($connection,$find_question);
                                                $row_question=mysqli_fetch_assoc($result_question);
                                                $question_id =  $row_question['question_id'];
                                                $question_text =  $row_question['question_text'];
                                                ?>

                                                <input type="text" hidden value="<?php echo $question_id;?>"
                                                    name="keyquestion1">
                                                <label class="col-12 text-center col-form-label" for="confirm3">
                                                    <?php echo $question_text;?> </label>
                                                <br>
                                                <br>
                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="confirm3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success ">
                                                            <input type="radio" name="second_answer" id="radio4"
                                                                value="Applicando gli indici del CNDCEC"
                                                                class="second_answer" required>
                                                            <label for="radio4">
                                                                Applicando gli indici del CNDCEC
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="confirm3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success ">
                                                            <input type="radio" name="second_answer" id="radio5"
                                                                value="Calcolando il DSCR" class="second_answer"
                                                                required>
                                                            <label for="radio5">
                                                                Calcolando il DSCR
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="confirm3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success ">
                                                            <input type="radio" class="second_answer"
                                                                name="second_answer" id="radio6"
                                                                value="Facendo i budget e analisi di bilancio" required>
                                                            <label for="radio6">
                                                                Facendo i budget e analisi di bilancio
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="confirm3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success  ">
                                                            <input type="radio" class="second_answer"
                                                                name="second_answer" id="radio7"
                                                                value="Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO"
                                                                required>
                                                            <label for="radio7">
                                                                Introducendo in azienda un sistema di risk control
                                                                basato
                                                                sul CONTROLLO QUALITATIVO
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <ul class="list-inline wizard mb-0">

                                            <li class="next list-inline-item float-right "><button type="button"
                                                    class="btn btn-info" id="continua1">Continua
                                                </button></li>
                                        </ul>

                                        <!-- the modal of the first  form -->

                                        <div class="modal" id="question_one_form" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Conferma!</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Sei sicuro per risposte che hai dato? .</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" name="first_querst"
                                                            class="btn btn-success" id="continua">Si </button>
                                                        <button type="button" class="btn btn-dark"
                                                            data-dismiss="modal">No</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </form>
                                </div>

                                <?php    }  else if ($row_find['question_step']==2) {  //this is the second step
                                            
                                        ?>
                                <div class="tab-pane" id="first">
                                    <form method="post" action="dashboard.php">
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="text" hidden
                                                    value="<?php echo $row_find['question_step'];?>" name="step">
                                                <input type="text" hidden value="<?php echo $_SESSION['user_id'];?>"
                                                    name="persons">

                                                <center>
                                                    <video class="col-lg-8 col-md-12" height="330" controls="controls"
                                                        type="video/mp4" preload="none" id="video1"> 
                                                        <source src="../video/parte2.mp4" autostart="false">
                                                        Questo browser non e suportato ...
                                                    </video> </center>
                                                <br>
                                                <br>
                                                <?php  
                                                 global $connection;  //find the thirt question
                                                $find_question="SELECT * FROM questions_table WHERE question_id=3";
                                                $result_question = mysqli_query($connection,$find_question);
                                                $row_question=mysqli_fetch_assoc($result_question);
                                                $question_id =  $row_question['question_id'];
                                                $question_text =  $row_question['question_text'];
                                                ?>
                                                <input type="text" hidden value="<?php echo $question_id;?>"
                                                    name="keyquestion">
                                                <label class="col-12 text-center col-form-label" for="confirm3">
                                                    <?php echo $question_text;?> </label>
                                                <br>
                                                <br>
                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="userName3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success  ">
                                                            <input type="radio" class="thirt_answer" name="thirt_answer"
                                                                id="radio1" value="Il sitema degli indici del CNDCEC"
                                                                required>
                                                            <label for="radio1">
                                                                Il sitema degli indici del CNDCEC
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="password3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success  ">
                                                            <input type="radio" class="thirt_answer" name="thirt_answer"
                                                                id="radio2" value="Il calcolo del DSCR" required>
                                                            <label for="radio2">
                                                                Il calcolo del DSCR
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="confirm3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success ">
                                                            <input type="radio" class="thirt_answer" name="thirt_answer"
                                                                id="radio3"
                                                                value="La Balnaced Scorecard di Kaplan e Norton"
                                                                required>
                                                            <label for="radio3">
                                                                La Balnaced Scorecard di Kaplan e Norton
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="confirm3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success ">
                                                            <input type="radio" class="thirt_answer" name="thirt_answer"
                                                                id="radio33" value="Il Budgeting" required>
                                                            <label for="radio33">
                                                                Il Budgeting
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="confirm3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success ">
                                                            <input type="radio" class="thirt_answer" name="thirt_answer"
                                                                id="radio334" value="L`analisi di bilancio" required>
                                                            <label for="radio334">
                                                                L'analisi di bilancio
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="confirm3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success ">
                                                            <input type="radio" class="thirt_answer" name="thirt_answer"
                                                                id="radio3345"
                                                                value="Il Direct costing con il calcolo del Margine di contribuzione e del Brak Even Point"
                                                                required>
                                                            <label for="radio3345">
                                                                Il Direct costing con il calcolo del Margine di
                                                                contribuzione e del Brak Even Point
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>

                                                <?php  
                                                 global $connection;     //find the forth question
                                                $find_question="SELECT * FROM questions_table WHERE question_id=4";
                                                $result_question = mysqli_query($connection,$find_question);
                                                $row_question=mysqli_fetch_assoc($result_question);
                                                $question_id =  $row_question['question_id'];
                                                $question_text =  $row_question['question_text'];

                                            
                                                ?>

                                                <input type="text" hidden value="<?php echo $question_id;?>"
                                                    name="keyquestion1">
                                                <label class="col-12 text-center col-form-label" for="confirm3">
                                                    <?php echo $question_text;?> </label>
                                                <br>
                                                <br>
                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="confirm3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success ">
                                                            <input type="radio" name="forth_answer" id="radio4"
                                                                value="SI ma da sola non basta" class="forth_answer"
                                                                required>
                                                            <label for="radio4">
                                                                SI ma da sola non basta
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="confirm3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success ">
                                                            <input type="radio" name="forth_answer" id="radio5"
                                                                value="No può essere sostituita dal Budget"
                                                                class="forth_answer" required>
                                                            <label for="radio5">
                                                                No può essere sostituita dal Budget
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="confirm3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success ">
                                                            <input type="radio" class="forth_answer" name="forth_answer"
                                                                id="radio6" value="No E' sufficiente la stima del DSCR"
                                                                required>
                                                            <label for="radio6">
                                                                No E' sufficiente la stima del DSCR
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-1">
                                                    <label class="col-md-3 col-form-label" for="confirm3"> </label>
                                                    <div class="col-md-9">
                                                        <div class="radio radio-success  ">
                                                            <input type="radio" class="forth_answer" name="forth_answer"
                                                                id="radio7"
                                                                value="No basta l'anali per indici dei dati di bilancio passati"
                                                                required>
                                                            <label for="radio7">
                                                                No basta l'anali per indici dei dati di bilancio passati
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <ul class="list-inline wizard mb-0">

                                            <li class="next list-inline-item float-right "><button type="button"
                                                    name="second_querst" class="btn btn-success" id="continua2">Continua
                                                </button></li>
                                        </ul>


                                        <!-- the modal of the first  form -->

                                        <div class="modal" id="question_two_form" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Conferma!</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Sei sicuro per risposte che hai dato? .</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" name="second_querst"
                                                            class="btn btn-success" id="continua">Si </button>
                                                        <button type="button" class="btn btn-dark"
                                                            data-dismiss="modal">No</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <?php } else if($row_find['question_step']==3){   //echo the step 3 video
                                    ?>
                                <div class="tab-pane" id="first">
                                    <form method="post" action="dashboard.php">
                                        <div class="row">
                                            <div class="col-12">
                                                <input type="text" hidden
                                                    value="<?php echo $row_find['question_step'];?>" name="step">
                                                <input type="text" hidden value="<?php echo $_SESSION['user_id'];?>"
                                                    name="persons">

                                                <center>
                                                    <video class="col-lg-8 col-md-12" height="330" controls="controls"
                                                        type="video/mp4" preload="none">
                                                        <source src="../video/parte3.mp4" autostart="false">
                                                        Questo browser non e suportato ...
                                                    </video>
                                                    <br>
                                                    <br>
                                                    <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                    <h3 class="mt-0">Fai click su scarica per avere la possibilita di
                                                        scaricare il contratto</h3>

                                                    <a type="button" href="/assets/contratto-convegni.pdf"
                                                        class="btn btn-success waves-effect waves-light" download>
                                                        <span class="btn-label"><i
                                                                class="fas fa-download"></i></span>Scarica
                                                    </a>

                                                </center>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                </div>
                                <?php
                                }?>
                            </div> <!-- tab-content -->
                        </div> <!-- end #rootwizard-->
                        <input type="text" hidden value="<?php echo $row_find['question_step'];?>" class="stepp">
                        <input type="text" hidden value="<?php echo  $row_find['time_started'] ;?>" class="timeHold">
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    </div> <!-- end container -->
    </div>
    <!-- end wrapper -->

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
    <?php include "../footer.php"; ?>
 
</body>
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