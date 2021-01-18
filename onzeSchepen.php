 
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



 <?php
/* fetch() in een loop */
echo "<h3>php fetch() in een loop</h3>";
while($row = $sth->fetch()){
echo $row["imono"] . $row["naam"] . $row["DWT"] . $row["volume"];
echo "<br> <br>";
}
?>


 </main>


 </body>
  




