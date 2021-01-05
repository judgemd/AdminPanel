<?php

if(strip_tags($_GET['dashboard']) == true) {
  $_SESSION["dashboard"] = $dashboard 
  header("Location:index.php"); 
} else {
    header("Location:index.php");
}

?>