<?php

if(isset($_POST["submit"])){
   
 $name = $_POST["name"];
 $email = $_POST["email"];
 $username = $_POST["uid"];
 $password = $_POST["pwd"];
 $passwordConfirm = $_POST["pwd-confirm"];

require_once 'dbconnectlogin.php';
require_once 'functionsinclude.php';

if(emptyInputSignup($name, $email, $username, $password, $passwordConfirm) !== false){
    header("location: ../signup.php?error=emptyinput");
    exit();
}
if(invalidUid($username) !== false){
    header("location: ../signup.php?error=invalidUid");
    exit();
}

if(invalidEmail($email) !== false){
    header("location: ../signup.php?error=invalidEmail");
    exit();
}

if(pwdMatch($password, $passwordConfirm) !== false){
    header("location: ../signup.php?error=passwordsdontmatch");
    exit();
}

if(uidExists($conn, $username) !== false){
    header("location: ../signup.php?error=usernametaken");
    exit();
}

createUser($conn, $name, $email, $username, $password, $passwordConfirm);




}
else{
    header("location: ../signup.php");
}