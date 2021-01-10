<?php
    include("system/connection.php");

$change = $_POST["changeparagraph"];
     
$sqlquery = "UPDATE mainphp SET mainparagraph = '$change' WHERE id='1'";
if ($conn->query($sqlquery) === TRUE) {
    echo "Succesfull UPDATE";
} 
else {
    echo "ERROR: " . $conn->error;
}

?>