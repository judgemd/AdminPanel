<?php
        include("../../system/connection.php");


        $changeparagraph = $_POST["changeparagraph"];
        $changeid = $_POST["changeid"];


        $sql = "UPDATE mainphp SET mainparagraph = '$changeparagraph' WHERE id = '$changeid' ";

    if ($conn->query($sql) === TRUE) {
        echo "Succesfull UPDATE";
        header("Location:../../index.php");
    } 
    else {
        echo "ERROR: " . $conn->error;
    }



?>