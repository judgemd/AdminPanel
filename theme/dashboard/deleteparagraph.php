<?php



    include("../../system/connection.php");

$delete = $_POST["deleteparagraph"];

$sqlquery = "DELETE FROM mainphp WHERE mainparagraph = '$delete'";

    if ($conn->query($sqlquery) === TRUE) {
        echo "Succesfull DELETE";
        header("Location:../../index.php");

    } 
    else {
        echo "ERROR: " . $conn->error;
    }





?>