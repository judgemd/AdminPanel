<?php
    include("system/connection.php");

   $cp = $_POST["createparagraph"];

    $sql = "INSERT INTO mainphp (id, mainparagraph) VALUES (1, 'testparagraph')";

    if(mysqli_query($conn, $sql)) {
        echo "successfull";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
  

?>