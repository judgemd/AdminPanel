<?php
session_start();

$panel = strip_tags($_GET['panel']); 

$_SESSION["panel"] = $panel; 
header("Location:index.php");

?>