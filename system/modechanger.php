<?php
session_start();

$modechanger = strip_tags($_GET['darkmode']); 

$_SESSION["darkmode"] = $modechanger; 

header("Location: ../main.php");	
?>