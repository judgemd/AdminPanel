<?php



    include("system/connection.php");

$delete = $_POST["deleteparagraph"];
$paragraphtodelete = $_POST["paragrapdelete"];

$sqlquery = "DELETE FROM mainphp WHERE mainparagraph = $delete";

    if ($conn->query($sqlquery) === TRUE) {
        echo "Succesfull DELETE";
    } 
    else {
        echo "ERROR: " . $conn->error;
    }





?>