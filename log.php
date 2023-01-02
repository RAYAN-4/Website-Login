<?php


include('con.php');
if (isset($_POST['email']) && isset($_POST['pass'])){
    $username = stripcslashes($_POST['email']);
    $password = stripcslashes($_POST['pass']);
    
    $username = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'pass');

    $email = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
    $password = htmlentities(mysqli_real_escape_string($conn, md5($_POST['pass'])));
    

    
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

if (!isset($err_s)) {


    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn , $sql);
    $row = mysqli_fetch_array($result);
    $coon = mysqli_num_rows($result);
    if($coon == 1) {
        header('Location:./Boo/index.html');
      
    }else{
        
        $email_error = 'كلمة السر غير صحيحة او الإيميل ';
        include('login.php');
    }
}
