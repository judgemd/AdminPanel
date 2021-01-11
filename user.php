Total number of data registered in the database
<?php
    include("system/connection.php");
    $id = $conn -> query("SELECT * FROM mainphp ORDER BY id DESC LIMIT 1");
    $outputs = $id->fetch_array();
        echo $outputs["id"];


?>