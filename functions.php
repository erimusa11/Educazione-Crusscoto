<?php
//***********************************************************************************************************************************************************************************************************


//This site was  Developed By 
//******  You can find us on ****//

//!  Eri Musa  
//? Website  : http://dilavermusa.com/
//? Linkedin : https://www.linkedin.com/in/eri-musa-681332181/


//!    Alban Delishi 
//? Website  : http://delishicodes.com/
//?  Linkedin : :https://www.linkedin.com/in/alban-delishi-22b485186


//********************************************************************************************************************************************************************************************************** */

date_default_timezone_set('Europe/Rome');
include "dbconnect.php";

// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//*******************************************************this is the log in function *******************************************/
function login()
{
    global $connection;

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connection, $username);
        $password = (mysqli_real_escape_string($connection, $password));

        //query to get users from studio
        $query = "SELECT * FROM users WHERE user_username = '$username' AND user_password='$password'";
        $result = mysqli_query($connection, $query);
        $count = mysqli_num_rows($result);
        if ($count == 0) {
            echo '<script type="text/javascript">';
            echo 'alert("Credenziali non valide")';
            echo '</script';
        }
        while (($row = mysqli_fetch_array($result))) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['user_surname'] = $row['user_surname'];
            $_SESSION['user_username'] = $row['user_username'];
            $_SESSION['user_password'] = $row['user_password'];
            $_SESSION['user_email'] = $row['user_email'];
            $_SESSION['user_phone'] = $row['user_phone'];
            $_SESSION['user_city'] = $row['user_city'];
            $_SESSION['user_province'] = $row['user_province'];
            $_SESSION['user_district'] = $row['user_district'];
            $_SESSION['user_livel'] = $row['user_livel'];
            $_SESSION['user_last_access'] = $row['user_last_access'];
           


            $user_id = $_SESSION['user_id'];
            $time = time() + (365 * 24 * 60 * 60);

            $query_upd = "UPDATE users SET user_last_access ='$time '  WHERE user_id = '$user_id'";
            mysqli_query($connection, $query_upd);
            if ($_SESSION['user_livel'] == 1) {
                return header("Location:  /user/dashboard.php");
            } elseif ($_SESSION['user_livel'] == 2) {
                return header("Location: /admin/dashboard.php");
            }
        }
    }
}

//************************************** logout function ********************************************************* */
function logout()
{
    if (isset($_POST['logout'])) {
        $_SESSION = array();
        session_destroy();
        return header("Location: ../index.php");
        exit();
    }
}
//************************************** /end/ logout function ********************************************************* */


//******************crea user function****************/
function creaUser()
{
    global $connection;
    mysqli_set_charset($connection, "utf8");
    $submit = $_POST['submit'];

    $nome = $_POST['nome']; 
    $cognome = $_POST['cognome'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['telefono'];

    $citta = $_POST['citta'];
    $citta = str_replace("'", "\'", $citta);
    $provincia = $_POST['provincia'];
    $provincia = str_replace("'", "\'", $provincia);
    $regione = $_POST['regione'];
    $regione = str_replace("'", "\'", $regione);

    $level = 1;

    if (isset($submit)) {
        $queryCheck = "SELECT user_username FROM users WHERE user_username = '$username'";
        $resultCheck = mysqli_query($connection, $queryCheck);
        $countCheck = mysqli_num_rows($resultCheck);
        if ($countCheck > 0) {
            echo "<script type='text/javascript'>";
            echo "alert('Questo username è occupato!')";
            echo "</script>";
        } else {
            $query = "INSERT INTO users (user_name, user_surname, user_username, user_password, user_email, user_phone, user_city, user_province, user_district, user_livel) VALUES ('$nome', '$cognome', '$username', '$password', '$email', '$phone', '$citta', '$provincia', '$regione', '$level')";
            $result = mysqli_query($connection, $query);
            $lastId = mysqli_insert_id($connection);

            if (!$result) {
                echo "<script type='text/javascript'>";
                echo "alert('L\'utente non è stato creato!')";
                echo "</script>";
                echo mysqli_error($connection);
                exit;
            } else {
                echo "<script type='text/javascript'>";
                echo "alert('L\'utente è stato creato!')";
                echo "</script>";
            }
        }
    }
}
//******************crea user function****************/

//******************modifica user function****************/
function modificaUser()
{
    global $connection;
    mysqli_set_charset($connection, "utf8");
    $submit = $_POST['submit'];
    $id = $_POST['user'];

    $nome = $_POST['name'];
    $cognome = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $citta = $_POST['citta'];
    $citta = str_replace("'", "\'", $citta);
    $provincia = $_POST['provincia'];
    $provincia = str_replace("'", "\'", $provincia);
    $regione = $_POST['regione'];
    $regione = str_replace("'", "\'", $regione);


    if (isset($submit)) {

        $query = "UPDATE users SET  user_name = '$nome', user_surname = '$cognome', user_username = '$username', user_password = '$password', user_email = '$email', user_phone = '$phone', user_city = '$citta', user_province = '$provincia', user_district = '$regione' WHERE user_id = '$id'";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            echo "<script type='text/javascript'>";
            echo "alert('L\'utente non è stato modificato!')";
            echo "</script>";
            echo mysqli_error($connection);
            exit;
        } else {
            echo "<script type='text/javascript'>";
            echo "alert('L\'utente è stato modificato!')";
            echo "</script>";
        }
    }
}

//******************modifica user function****************/
//***************** insert of the first question ****************/

function question_one(){

    if(isset($_POST['first_querst'])){
        global $connection;
    mysqli_set_charset($connection, "utf8");
                        //ge the datas
       $user_id =  $_POST['persons'];
       $keyquestion =  $_POST['keyquestion'];
       $first_answer =  $_POST['first_answer'];
       $keyquestion1 =  $_POST['keyquestion1'];
       $second_answer =  $_POST['second_answer'];
       $step =  $_POST['step'];

                //insert the first question
        $insert_question1 ="INSERT INTO answers_table (answer_value,right_answer,question_id,user_id,step_answer) VALUES ('$first_answer','indici CNDCEC','$keyquestion','$user_id','$step')";
        $result1= mysqli_query($connection,$insert_question1);
        
            //insert the secon question
        $insert_question2 ="INSERT INTO answers_table (answer_value,right_answer,question_id,user_id,step_answer) VALUES ('$second_answer','Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO','$keyquestion1','$user_id','$step')";
        $result2= mysqli_query($connection,$insert_question2);
        
        if($insert_question2){      //if this is true
                    //controll if the user has  given the right answer or not
        if($first_answer=='Indici CNDCEC' && $second_answer == 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO'){

                            //IF YES     restart the time video and change the step
             mysqli_query($connection,"UPDATE users SET question_step = 2 , time_started='0' WHERE user_id='$user_id'");
             $row_find['question_step']=2;
             return header("Location: /user/dashboard.php?error=1");
         
        }else {             //IF NOPE
            echo '<script>
            Swal.fire({
                   title: "Attenzione!",
                   text: "Le risposte date non sono corrette rivedi il video per dare le risposte corrette",
                   type: "error",
                   confirmButtonClass: "btn btn-confirm mt-2"
               });
             </script>';


        }
      }
    }
}
//***************** insert of the first question ****************/

//***************** insert of the second question ****************/

function question_tow(){

    if(isset($_POST['second_querst'])){
        global $connection;
    mysqli_set_charset($connection, "utf8");
                              //ge the datas
       $user_id =  $_POST['persons'];
       $keyquestion =  $_POST['keyquestion'];
       $thirt_answer =  $_POST['thirt_answer'];
       $keyquestion1 =  $_POST['keyquestion1'];
       $forth_answer =  $_POST['forth_answer'];
       $step =  $_POST['step'];

              //insert the first question
        $insert_question1 ="INSERT INTO answers_table (answer_value,right_answer,question_id,user_id,step_answer) VALUES ('$thirt_answer','La Balnaced Scorecard di Kaplan e Norton','$keyquestion','$user_id','$step')";
        $result1= mysqli_query($connection,$insert_question1);
        
                   //insert the secon question
        $insert_question2 ="INSERT INTO answers_table (answer_value,right_answer,question_id,user_id,step_answer) VALUES ('$forth_answer','SI ma da sola non basta','$keyquestion1','$user_id','$step')";
        $result2= mysqli_query($connection,$insert_question2);
        
        if($insert_question2){ //if this is true
                                     //controll if the user has  given the right answer or not
        if($thirt_answer=='La Balnaced Scorecard di Kaplan e Norton' && $forth_answer == 'SI ma da sola non basta'){


                             //IF YES     restart the time video and change the step
             mysqli_query($connection,"UPDATE users SET question_step = 3 , time_started='0' WHERE user_id='$user_id'");
             return header("Location: /user/dashboard.php?errori=1");

         
        }else {     //IF NOPE
            echo '<script>
            Swal.fire({
                   title: "Attenzione!",
                   text: "Le risposte date non sono corrette rivedi il video per dare le risposte corrette",
                   type: "error",
                   confirmButtonClass: "btn btn-confirm mt-2"
               });
             </script>';
        }
      }
    }
}
 //***************** insert of the second question ****************/

 //***************** insert of the new time when video is played   ****************/

function play_video(){

        if(isset($_POST['time_started'])){
        global $connection;
                    //GET THE DATAS
            $user_id=$_SESSION['user_id'];
            $stepp=$_POST['time_started'];
            $time_started=$_POST['time_started'];
                        //FIND THE USER
            $find_data = "SELECT * FROM users WHERE user_id='$user_id'";
            $result_find = mysqli_query($connection,$find_data);
            $row_find=mysqli_fetch_assoc($result_find);
            if($row_find['time_started'] == 0){         //updare the new time 
                mysqli_query($connection,"UPDATE users SET time_started = '$time_started'  WHERE user_id='$user_id'");
            }
        }
    } 
 //***************** insert of the new time when video is played   ****************/

 function simonechangeStep(){

    if(isset($_POST['chenge'])){
        global $connection;
        if($_POST['chenge']=='Passa su video 1'){
            $video=1;
        }else if ($_POST['chenge']=='Passa su video 2'){
            $video=2;
        }else if ($_POST['chenge']=='Passa su video 3'){
            $video=3;
        }

       
        $update ="UPDATE users SET question_step = '$video'  WHERE user_id=1";
        mysqli_query($connection,$update);
        

        return header("Location: /user/dashboard.php");

    }

 }