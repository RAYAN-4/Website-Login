<?php
include('con.php');
if(isset($_POST['button']))
{
    $username = stripcslashes(strtolower($_POST['user']));
    $email = stripcslashes($_POST['email']);
    $password = stripcslashes($_POST['pass']); 
}



    $username = htmlentities(mysqli_real_escape_string($conn , $_POST['user']));
    $email = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
    $password = htmlentities(mysqli_real_escape_string($conn, md5($_POST['pass'])));



$check_user = "SELECT * FROM `users` WHERE username='$username'";
$check_result = mysqli_query($conn, $check_user);
$num_rows = mysqli_num_rows($check_result);
if($num_rows != 0 ){
    $user_error = 'اسم المستخدم غير متاح <br>';
    $err_s = 1;
}

$check_email = "SELECT * FROM `users` WHERE email='$email'";
$check_result = mysqli_query($conn, $check_email);
$numm_rows = mysqli_num_rows($check_result);
if($numm_rows != 0 ){
    $email_error = 'الإيميل غير متاح <br>';
    $err_s = 1;
}











    if(empty($username)){

    $user_error = 'Please enter username <br>';
    $err_s = 1;

    }elseif(strlen($username) < 5){
    
    $user_error = 'Ohh , username small please enter again ^_^ ';
    $err_s = 1;

    }elseif(filter_var($username,FILTER_VALIDATE_INT)){
    $user_error = 'ادخل حروف يا الطيب لا تدخل ارقام <br>';
    $err_s = 1;
    }

  
    if(empty($email)){
    $email_error = 'قم بي ادخال الإيميل <br>';
    $err_s = 1;
    }



    if(empty($password)){
        $pass_error = 'ادخل الباسورد <br>';
        $err_s = 1;

        include('login.php');
    }

    elseif(strlen($password) < 5){

        $pass_error = 'Ohh , Password small <br>';
        $err_s = 1;

    include('login.php');
    }

        else{
            if(($err_s == 0) && ($num_rows == 0) &&($numm_rows == 0)){
        $sql = "INSERT INTO users(username , email , password) 
               VALUES ('$username' , '$email' , '$password')";
        mysqli_query($conn , $sql);
        header('location:./Boo/index.html');
            }

        else{
        include('login.php');
        }
        
        }
       

?>