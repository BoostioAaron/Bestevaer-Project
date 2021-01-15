<?php


/* signup functions */
function emptyInputSignup($name, $email, $username, $password, $passwordConfirm){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($password)  || empty($passwordConfirm)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


function pwdMatch($password, $passwordConfirm){
    $result;
   if ($password !== $passwordConfirm){
        $result = true;
   }

else{
    $result = false;
    }
return $result;
}


function uidExists($conn, $username, $email){
$sql = "SELECT * FROM USERS WHERE usersUid = ? OR usersEmail = ?;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
header("location: ../signup.php?error=stmtfailed");
exit();
}

mysqli_stmt_bind_param($stmt, "ss", $username, $email);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if($row = mysqli_fetch_assoc($resultData)){
 return $row;
}
else{
    $result = false;
    return $result;
}

mysqli_stmt_Close($stmt);
}



function createUser($conn, $username, $email){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
    }
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_Close($stmt);
    header("location: ../signup.php?error=none");
    exit();
    }


/* login functions */

    function emptyInputLogin($username, $password){
        $result;
        if(empty(empty($username) || empty($password)  )){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }


function loginUser($conn, $username, $password){
$uidExists = uidExists($conn, $username, $username);

if($uidExists === false){
    header("location: ../login.php?error=wronglogin");
    exit();
}


$pwdHashed = $uidExists["usersPwd"];
$checkPwd = password_verify($password, $pwdHashed);

if($checkPwd === false){
    header("location: ../login.php?error=wronglogin");
    exit();
}
 else if($checkPwd === true){
    session_start();
    $_SESSION["userid"] = $uidExists["usersId"];
    $_SESSION["useruid"] = $uidExists["usersUid"];
    header("location: ../index.php");
    exit();
 }
}

