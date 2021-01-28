<!DOCTYPE html>
<html lang="en">
    <?php include "includes/Header.php"; ?>
<body>
<header>
    <?php include "includes/navbar.php"; ?>
</header>

 <main>

<div id="login-wrapper">
  
    <div id="formitemslogin">
    <h1 id="titelLogin"> Login </h1>
 <form action="includes/logininclude.php" method="post">
 <input type="text" class="logininput" name="uidd" placeholder=" Username/Email..." ></input>
 <input type="password" class="logininput"  name="pwdd" placeholder=" Password..." ></input>
<button type="submit" id="submitknop-login" name="submit">Login</button>
<br>
<a id="idonthaveaccountlink" href="signup.php">I dont have an account</a>

</form>
 
<!--Error Messages-->
 <div id="errorLogin">    
<?php
if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo"<p>Fill in all fields!</p>";
    }
    else if($_GET["error"] == "username"){
        echo"<p>Wrong username</p>";
    }
    else if($_GET["error"] == "wrongpassword"){
        echo"<p>Wrong password</p>";
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