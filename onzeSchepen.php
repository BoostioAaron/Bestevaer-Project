 
 <!DOCTYPE html>
 <html lang="en">
     <?php include "includes/Header.php"; ?>
 <body>
 <header>
     <?php include "includes/navbar.php"; ?>
     <?php include "includes/dbconnect.php";  ?>
 </header>
 <body>
 <main>

 <div id="knoppeninfowrapper">
<div id="knoppeninfoitems">
 <form action="" method="post">  
 <input type="submit" id="Hermesbtn" name="Hermesbtn" value="Hermes"><form>
 <form action="" method="post">  
 <input type="submit" id="nsangelabtn" name="nsangelabtn" value="nsangela"><form>

 <form action="" method="post">  
 <input type="submit" id="luckystarbtn" name="luckystarbtn" value="luckystar"><form>

 <form action="" method="post">  
 <input type="submit" id="triumphbtn" name="triumphbtn" value="triumph"><form>

 <form action="" method="post">  
 <input type="submit" id="sabrinabtn" name="sabrinabtn" value="sabrina"><form>
 </div>  
</div>
 </main>

 <div id="infovanschepen">
  
 <div id="infovanschepenitems">
 <?php
 require_once "includes/Infobutton.php";
?>
 </div>
</div>

 </body>
  </html>






