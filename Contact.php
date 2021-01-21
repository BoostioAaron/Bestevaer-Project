<!DOCTYPE html>
<html lang="en">
    <?php include "includes/Header.php"; ?>
<body>
<body>
<header>
    <?php include "includes/navbar.php"; ?>
</header>

<main>

<div class="ZwarteachtergrondContact">
<h1 id="Contacttitle"> Contact</h1>
 

<form action="includes/actionContact.php" method="post">
<input type="text" class="" id="voornaamContact" name="voornaam" placeholder="Naam..."> <br><br>
<input type="text" class="" id="achternaamContact" name="achternaam" placeholder=" achternaam..."> <br><br>
<input type="text" class="" id="EmailContact" name="Email" placeholder=" Email..."> <br><br>
<textarea placeholder="Vraag" id="Vraag" name="Vraag" rows="4" cols="50"></textarea> <br>
<input type="submit" id="Opslaan" name="Opslaan"  value="Opslaan" placeholder=" Opslaan..."> <br>
 </form>
 <?php
 if(isset($_GET["contactError"])){
    if($_GET["contactError"]== "emptyInput"){
     echo "<p> Please fill in all info.</p>";
 }

 if($_GET["contactError"] == "invalidName"){
    echo "<p> Invalid name. Probeer iets anders</p>";
}


if($_GET["contactError"] == "Invalidemail"){
    echo "<p> Invalid Email.</p>";
}
 }



 ?>


</div>
<div class="ContactWrapper">

<div class="EmailWrapper">
<h1 id="Email"> Email</h1>
<i id="iconCustomization" class="far fa-envelope"></i>

<h2 id="ContactText"> Boot@bestevaer.nl </h2>
 

</div>

<div class="SocialMediaWrapper">
<h1 id="Socialmedia"> Social media</h1>
<i id="iconCustomization" class="fab fa-github"></i>
<h2 id="ContactText"> github.com/Bestevaer</h2>
<br><br>
<i id="iconCustomization" class="fab fa-instagram"></i>
<h2 id="ContactText"> instagram.com/Bestevaer</h2>
<br><br>
<i id="iconCustomization" class="fab fa-twitter"></i>
<h2 id="ContactText"> Twitter.com/Bestevaer</h2>



</div>
   </div>
   
</main>

</body>
</html>

