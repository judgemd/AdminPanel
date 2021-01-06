<?php
    include("system/connection.php");
?>
<html>
    <?php include("theme/headtags.php");?>

    <body>
        
    <?php
    
    $sorgu = $conn -> query("SELECT datas FROM datas");
    $cikti = $sorgu->fetch_array();
    
        echo $cikti["datas"];
    ?>

    </body>
    </html>