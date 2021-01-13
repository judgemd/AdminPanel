<?php
    include("../../system/connection.php");

$change = $_POST["changeparagraph"];
$paragraphtochange = $_POST["paragraphtochange"];

$sqlquery = "UPDATE mainphp SET mainparagraph = '$change' WHERE mainparagraph= '$paragraphtochange' ";

    if ($conn->query($sqlquery) === TRUE) {
        echo "Succesfull UPDATE";
    } 
    else {
        echo "ERROR: " . $conn->error;
    }

?>