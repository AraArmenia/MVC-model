<?php
    if(isset($_POST['submit'])) {
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];
        $pwdrepeat = $_POST['pwdRepeat'];
        $email = $_POST['email'];

        include "../classes/dbh.classes.php";
        include "../Models/model.php";
        include "../Controllers/signup.controller.php";

        $signup = new SignupContr($uid,$pwd,$pwdrepeat,$email);

        $signup->signupUser();


    }
    else{
        header("Location:../index.php");
    }
