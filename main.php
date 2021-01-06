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
    
        //$sqlquery = "UPDATE datas SET datas = 'notest' WHERE datas='test'";
       // if ($conn->query($sqlquery) === TRUE) {
        //    echo "Succesfull UPDATE";
       // } 
        //else {
         //   echo "ERROR: " . $conn->error;
        //}
        
 ?>

    </body>
    </html>