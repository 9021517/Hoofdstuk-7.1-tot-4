<?php
if (isset ($_POST['verzenden'])) {
    $invoer = $_POST['tekstvak'];
    echo $invoer;
    echo "<br><br>";
} else {
    $invoer = "";
}

?>