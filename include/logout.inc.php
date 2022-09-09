<?php
session_start();

if(isset($_GET['status'])) {
    unset($_SESSION['username']);

    header("Location: ../index.php");
}