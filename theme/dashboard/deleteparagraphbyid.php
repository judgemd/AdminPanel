<?php

    include("../../system/connection.php");

$delete = $_POST["deleteparagraphbyid"];

$sqlquery = "DELETE FROM mainphp WHERE id = '$delete'";

    if ($conn->query($sqlquery) === TRUE) {
        echo "Succesfull DELETE";
        header("Location:../../index.php");
    } 
    else {
        echo "ERROR: " . $conn->error;
    }






?>