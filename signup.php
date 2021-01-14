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
 
  
 </main>


 <footer>


 </footer>

</body>
</html>