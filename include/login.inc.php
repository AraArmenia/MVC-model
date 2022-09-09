<?php
session_start();

if (isset($_POST['submit'])) {
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    
    include "../classes/dbh.classes.php";
    include "../Models/model.php";
    include "../Views/login.view.php";

    $signup = new LoginContr($uid, $pwd);

    $signup->loginUser();
} else {
    header("Location:../index.php");
}
