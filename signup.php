<!DOCTYPE html>
<html lang="en">
    <?php include "includes/Header.php"; ?>
<body>
<header>
    <?php include "includes/navbar.php"; ?>
</header>

 <main>
 <div id="signup-wrapper">
  <div id="formitemsSignup">
  <h1 id="titelSignup"> Signup</h1>
<form action="includes/signupinclude.php" method="post">
 <input type="text" class="signupinput" name="name" placeholder="Full name..." ></input>
 <input type="text" class="signupinput"  name="email" placeholder="E-mail..." ></input>
 <input type="text" class="signupinput" name="uid" placeholder="Username..." ></input>
 <input type="password" class="signupinput" name="pwd" placeholder="Password..." ></input>
 <input type="password" class="signupinput" name="pwd-confirm" placeholder="Confirm Password"></input>
<button type="submit" id="submitknop-signup" name="submit">Sign up</button>
<br>
<a id="iHaveAnAccountlink" href="login.php">I already have an account</a>
</form>

<!--Error Messages-->
 <div id="errorSignup">
<?php
if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo"<p>Fill in all fields!</p>";
    }
    else if ($_GET["error"] == "invaliduid" ){
        echo"<p> Choose a proper username!</p>";
    }
    else if ($_GET["error"] == "invalidEmail" ){
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
<!--Error Messages-->
  </div>
 </div>
</div>
  
 </main>

 <footer>


 </footer>

</body>
</html>