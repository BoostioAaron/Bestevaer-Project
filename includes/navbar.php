<div class="topnav">
<img src="image/BestevaerLogo.png" href="index.php" id="logo" alt="Logo">
  <a class="active" href="index.php">Home</a>
 
  <a href="Contact.php">Neem contact op</a>
  <a href="onzeSchepen.php">Onze Schepen</a>
  <?php
  if(isset($_SESSION["useruid"])){
    echo" <a href='Berekenen.php'>Berekenen</a>"; 
    echo"<a href='includes/logoutinclude.php'>logout</a>";
    echo"<h1> ['useruid'] </h1>";
   
  }
  else{
    
    echo" <a href='login.php'>login</a>";
    echo" <a href='signup.php'>Sign up</a>";
  }
  ?>
 

</div>