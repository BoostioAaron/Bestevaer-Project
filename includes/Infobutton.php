<?php
  include("dbconnect.php"); 

/* statements */

  /* Hermes stmt's */
$stmtHermes = "SELECT * FROM schepen where imono = '9071052';";
$sthHermes = $con->prepare($stmtHermes);
$sthHermes->execute();
 /* Hermes stmt's */

  /* nsangela stmt's */
$stmtnsangela = "SELECT * FROM schepen where imono = '9071076';";
$sthnsangela = $con->prepare($stmtnsangela);
$sthnsangela->execute();
 /* nsangela stmt's */


  /* luckystar stmt's */
$stmtluckystar = "SELECT * FROM schepen where imono = '9123506';";
$sthluckystar = $con->prepare($stmtluckystar);
$sthluckystar->execute();
 /* luckystar stmt's */


  /* triumph stmt's */
$stmttriumph = "SELECT * FROM schepen where imono = '9311555';";
$sthtriumph = $con->prepare($stmttriumph);
$sthtriumph->execute();
 /* triumph stmt's */


  /* sabrina stmt's */
$stmtsabrina = "SELECT * FROM schepen where imono = '9414735';";
$sthsabrina = $con->prepare($stmtsabrina);
$sthsabrina->execute();
 /* sabrina stmt's */

/* statements */



/* isset's */
 if(isset($_POST["Hermesbtn"])){
    while($row = $sthHermes->fetch()){
        $img = $row["afbeelding"];
        echo "<img src='$img'  alt='Hermes schip' width='325' height='275'>";
        echo "<br>";
        echo "Naam: ";
        echo $row["naam"];
        echo "<br>";
        echo "DWT: ";
        echo $row["DWT"];
        echo "<br>";
        echo "GT: ";
        echo $row["GT"];
        echo "<br>";
        echo "volume: ";
        echo $row["volume"];
        echo "<br>";
        echo "<br> <br>";
        } 
 }
 if(isset($_POST["nsangelabtn"])){
  while($row = $sthnsangela->fetch()){
    $img = $row["afbeelding"];
    echo "<img src='$img'  alt='NSANGELA schip' width='325' height='275'>";
    echo "<br>";
    echo "Naam: ";
    echo $row["naam"];
    echo "<br>";
    echo "DWT: ";
    echo $row["DWT"];
    echo "<br>";
    echo "GT: ";
    echo $row["GT"];
    echo "<br>";
    echo "volume: ";
    echo $row["volume"];
    echo "<br>";
    echo "<br> <br>";
   
      }
    }
      if(isset($_POST["luckystarbtn"])){
        while($row = $sthluckystar->fetch()){
         $img = $row["afbeelding"];
          echo "<img src='$img'  alt='luckystar schip' width='325' height='275'>";
          echo "<br>";
          echo "Naam: ";
          echo $row["naam"];
          echo "<br>";
          echo "DWT: ";
          echo $row["DWT"];
          echo "<br>";
          echo "GT: ";
          echo $row["GT"];
          echo "<br>";
          echo "volume: ";
          echo $row["volume"];
          echo "<br>";
          echo "<br> <br>";
            } 
        }
        if(isset($_POST["triumphbtn"])){
          while($row = $sthtriumph->fetch()){
            $img = $row["afbeelding"];
            echo "<img src='$img'  alt='triumph schip' width='325' height='275'>";
            echo "<br>";
            echo "Naam: ";
            echo $row["naam"];
            echo "<br>";
            echo "DWT: ";
            echo $row["DWT"];
            echo "<br>";
            echo "GT: ";
            echo $row["GT"];
            echo "<br>";
            echo "volume: ";
            echo $row["volume"];
            echo "<br>";
            echo "<br> <br>";
           
              } 
            }
              if(isset($_POST["sabrinabtn"])){
                while($row = $sthsabrina->fetch()){
                $img = $row["afbeelding"];
                  echo "<img src='$img'  alt='sabrina schip' width='325' height='275'>";
                  echo "<br>";
                  echo "Naam: ";
                  echo $row["naam"];
                  echo "<br>";
                  echo "DWT: ";
                  echo $row["DWT"];
                  echo "<br>";
                  echo "GT: ";
                  echo $row["GT"];
                  echo "<br>";
                  echo "volume: ";
                  echo $row["volume"];
                  echo "<br>";
                  echo "<br> <br>";
                 
                    } 
                }

/* isset's */