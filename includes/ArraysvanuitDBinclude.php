<?php

$sqlnaam = "SELECT naam FROM schepen";
$resultnaam = mysqli_query($conn, $sqlnaam);
$schepen = array();
if (mysqli_num_rows($resultnaam) > 0){
    while($row = mysqli_fetch_assoc($resultnaam)){
        $schepen[] = $row['naam'];
    }
}


$sqlDWT = "SELECT DWT FROM schepen";
$resultDWT = mysqli_query($conn, $sqlDWT);
$gewichtboot = array();
if (mysqli_num_rows($resultDWT) > 0){
    while($row = mysqli_fetch_assoc($resultDWT)){
    $gewichtboot[] = $row['DWT'];
    }
}

$sqlGT = "SELECT GT FROM schepen";
$resultGT = mysqli_query($conn, $sqlGT);
$laadruimte = array();
if (mysqli_num_rows($resultGT) > 0){
    while($row = mysqli_fetch_assoc($resultGT)){
        $laadruimte[] = $row['GT'];
        
    }
}