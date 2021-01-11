<?php
    include("system/connection.php");
?>
<html>
    <?php include("theme/headtags.php");?>

    <body>
        
    <?php
    
	$outputs=$db->query("SELECT * FROM mainphp ORDER BY id ASC",PDO::FETCH_ASSOC);
        
        foreach($outputs as $output) { 
        echo $output["mainparagraph"];
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