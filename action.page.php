<?php 
// aurteur : Myumyun
// date 9-1-2025
// opdracht : H7.1 tot H7.4



if (isset ($_POST ['verzenden'])) {
    $aanhef = $_POST ['aanhef'];
    $naam = $_POST['naam'];
    $bericht = $_POST['bericht'];

    echo "Het formulier is verzonden! <br>";
    echo "Naam: " . $naam . "<br>";
    echo "Bericht: " . $bericht . "<br><br><br>" ;
} else {
    $aanhef = "";
    $naam = "";
    $bericht = "";
   }

?>