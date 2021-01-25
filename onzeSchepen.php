 
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
 <input type="submit" id="Hermesbtn" class="onzeschepenknop" name="Hermesbtn" value="Hermes"><form>
 <form action="" method="post">  
 
 <input type="submit" id="nsangelabtn" class="onzeschepenknop" name="nsangelabtn" value="nsangela"><form>

 <form action="" method="post">  
 <input type="submit" id="luckystarbtn" class="onzeschepenknop" name="luckystarbtn" value="luckystar"><form>
 
 <form action="" method="post">  
 <input type="submit" id="triumphbtn" class="onzeschepenknop" name="triumphbtn" value="triumph"><form>
 <form action="" method="post">  
 <input type="submit" id="sabrinabtn"  class="onzeschepenknop" name="sabrinabtn" value="sabrina"><form>
 <div>  
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






