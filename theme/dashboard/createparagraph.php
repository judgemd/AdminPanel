<?php
    include("../../system/connection.php");
    


            $id = $conn -> query("SELECT * FROM mainphp ORDER BY id DESC LIMIT 1");
            $outputs = $id->fetch_array();
        
                $maxnumber = $outputs["id"];
                $number = $maxnumber + 1;


    $cp = $_POST["createparagraph"];

            $sql = "INSERT INTO mainphp (id, mainparagraph) VALUES ($number, '$cp')";

        if(mysqli_query($conn, $sql)) {
            echo "successfull";
        } else {
            echo mysqli_error($conn);
}           

  
  
  /*  
        $sql = "INSERT INTO mainphp (id, mainparagraph) VALUES ($sayi, '$cp')";
    
        if(mysqli_query($conn, $sql)) {
            echo "successfull";
        }    
    
  
*/

    
    /*else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
    */

    
 


?>