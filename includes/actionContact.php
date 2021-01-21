<?php 



    require_once("dbconnect.php");
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $email = $_POST["Email"];
    $vraag = $_POST["Vraag"];
    $pattern = "/^[a-zA-Z0-9]*$/";

     if(empty($voornaam) || empty($achternaam) || empty($vraag) || empty($email)){
        header('Location: ../Contact.php?contactError=emptyInput');
        exit;
     }
     if(!preg_match($pattern, $voornaam) || !preg_match($pattern, $achternaam)){
        header('Location: ../Contact.php?contactError=invalidName');
        exit;
     }
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header('Location: ../Contact.php?contactError=Invalidemail');
        exit;
     }
 
     
else{
    $sql = "INSERT INTO contact (voornaam, achternaam, email, vraag) VALUES
    (:voornaamTemplate, :achternaamTemplate, :EmailTemplate, :VraagTemplate)";
    $params = array(":voornaamTemplate" => "$voornaam", ":achternaamTemplate" => " $achternaam", ":EmailTemplate" => " $email", ":VraagTemplate" => "$vraag");
    
    $sth = $con->prepare($sql);
    $sth->execute($params);
    
    $con = null;
    header("Location: ../contact.php");
}




