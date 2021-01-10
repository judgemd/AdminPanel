<?php

    $sayi = 1;

    include("system/connection.php");

   $cp = $_POST["createparagraph"];


    
        $sql = "INSERT INTO mainphp (id, mainparagraph) VALUES ($sayi, '$cp')";
    
        if(mysqli_query($conn, $sql)) {
            echo "successfull";
        }    
    
    while(mysqli_error($conn)) {
        $sayi++;
        $sql = "INSERT INTO mainphp (id, mainparagraph) VALUES ($sayi, '$cp')";
    
        if(mysqli_query($conn, $sql)) {
            break;
            echo "successfull";
        }    
    }
    
    
    /*else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
    */

?>