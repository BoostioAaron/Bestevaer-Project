<!DOCTYPE html>
<html lang="en">
    <?php include "includes/Header.php"; ?>
<body>
<header>
    <?php include "includes/navbar.php"; ?>
</header>

 <main>

<form action="includes/signupinclude.php" method="post">
 <input type="text" name="name" placeholder="Full name..." ></input>
 <input type="text" name="email" placeholder="E-mail..." ></input>
 <input type="text" name="uid" placeholder="Username..." ></input>
 <input type="password" name="pwd" placeholder="Password..." ></input>
 <input type="password" name="pwd-confirm" placeholder="Confirm Password"></input>
<button type="submit" name="submit">Sign up</button>
</form>
 
<?php
if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo"<p>Fill in all fields!</p>";
    }
    else if ($_GET["error"] == "invaliduid" ){
        echo"<p> Choose a proper username!</p>";
    }
    else if ($_GET["error"] == "invalidemail" ){
        echo"<p> Choose a proper Email!!</p>";
    }
    else if ($_GET["error"] == "passwordsdontmatch" ){
        echo"<p>The passwords you selected dont match!</p>";
    }
    else if ($_GET["error"] == "usernametaken" ){
        echo"<p>Username already taken. Try another one!</p>";
    }
    else if ($_GET["error"] == "none" ){
        echo"<p>Your account has succesfuly been created!</p>";
    }
}


?>
  
 </main>

 <footer>


 </footer>

</body>
</html>