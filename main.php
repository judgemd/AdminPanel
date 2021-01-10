<?php
    include("system/connection.php");
?>
<html>
    <?php include("theme/headtags.php");?>

    <body>
        
    <?php
    
    $sorgu = $conn -> query("SELECT mainparagraph FROM mainphp");
    $cikti = $sorgu->fetch_array();
    
        echo $cikti["mainparagraph"];
    /*
    //////////////////////////////////////////

        $sqlquery = "UPDATE datas SET datas = 'notest' WHERE datas='test'";
        if ($conn->query($sqlquery) === TRUE) {
            echo "Succesfull UPDATE";
        } 
        else {
            echo "ERROR: " . $conn->error;
        }
      */  
 ?>

    </body>
    </html>