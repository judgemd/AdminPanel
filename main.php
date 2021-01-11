<?php
    include("system/connection.php");
?>
<html>
    <?php include("theme/headtags.php");?>

    <body>
        
    <?php
        
    $id = $conn -> query("SELECT * FROM mainphp ORDER BY id DESC LIMIT 1");
    $outputs = $id->fetch_array();
        $maxnumber = $outputs["id"];
        $minnumber = 1;
        while($minnumber <= $maxnumber){
        $sorgu = $conn -> query("SELECT mainparagraph FROM mainphp WHERE id=$minnumber");    
        $output = $sorgu->fetch_array();
         echo $output["mainparagraph"] . "<br>";
         $minnumber++;
         }
        
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