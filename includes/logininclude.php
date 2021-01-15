<?php

if(isset($_POST["submit"])){

    $username = $_POST["uid"];
    $password = $_POST["pwd"];

    require_once 'dbconnectlogin.php';
    require_once 'functionsinclude.php';

    if(emptyInputLogin($name, $password) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $password);
}
else{
    header("location: ../login.php");
    exit();
}