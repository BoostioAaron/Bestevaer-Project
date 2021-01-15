<!DOCTYPE html>
<html lang="en">
    <?php include "includes/Header.php"; ?>
<body>
<header>
    <?php include "includes/navbar.php"; ?>
</header>

 <main>


 <form action="includes/logininclude.php" method="post">
 <input type="text" name="uidd" placeholder="Username/Email..." ></input>
 <input type="password" name="pwdd" placeholder="Password..." ></input>
<button type="submit" name="submit">Login</button>
</form>
<?php
if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo"<p>Fill in all fields!</p>";
    }
    else if($_GET["error"] == "wronglogin"){
        echo"<p>incorrect login details</p>";
    }
}
?>
  
 </main>


 <footer>


 </footer>

</body>
</html>