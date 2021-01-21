<!DOCTYPE html>
<html lang="en">
    <?php include "includes/Header.php"; ?>
<body>
<header>
    <?php include "includes/navbar.php"; ?>
</header>

 <main>

 <div class="achtergrondHome">
    <div class="textAreaHome">
  
        <h1 id="GeanimeerdetextHome" class="ml3">Over deze Website</h1>
        <?php
    if (isset($_SESSION["useruid"])) {
    echo "<h2 id='Hellothereifloggedin'>Hello there, " . $_SESSION["useruid"] . "!</h2>";
    }
?>
        <p id="HomepaginaText">
       Welkom bij bestevaer Wij zijn een website. die helpt met het berekenen van het gewicht. En groote van goederen.Op een schip.
        
        
        </p>
        

    </div>
 </div>

 
  
 </main>


 <footer>


 </footer>

<script  src="Javascript/anime.min.js"> </script>
</body>
</html>