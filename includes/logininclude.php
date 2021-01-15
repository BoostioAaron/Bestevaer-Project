<?php

if(isset($_POST["submit"])){

    $username = $_POST["uidd"];
    $password = $_POST["pwdd"];

    require_once 'dbconnectlogin.php';
    require_once 'functionsinclude.php';

    if(emptyInputLogin($username, $password) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $password);
}
else{
    header("location: ../login.php");
    exit();
}