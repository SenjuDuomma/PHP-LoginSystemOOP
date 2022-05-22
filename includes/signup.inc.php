<?php

if (isset($_POST["submit"])) {
    //grabbing the data

    $uid = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    
    //Instantiate Signup Class
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    $signup = new SignupContr($uid, $email, $pwd, $pwdrepeat);

    //Runing error handlers and user signup

    //Going to back to front page
}