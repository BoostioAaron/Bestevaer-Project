 
 <!DOCTYPE html>
 <html lang="en">
     <?php include "includes/Header.php"; ?>
 <body>
 <header>
     <?php include "includes/navbar.php"; ?>
 </header>
 <body>
 <main>
 </main>

 </body>
  



<?php

 include "includes/dbconnect.php";


/* fetch() in een loop */
echo "<h3>php fetch() in een loop</h3>";
while($row = $sth->fetch()){
echo $row["imono"] . $row["naam"] . $row["DWT"];
echo "<br> <br>";
}

$sth ->execute();
$lijst = $sth->fetchAll();

echo"<h3>php fetchALL() als assciative array</h3>";
print_r($lijst);

echo"<h3>php fetchALL() als json</h3>";
$lijst_json = json_encode($lijst);
print_r($lijst_json);

?>
