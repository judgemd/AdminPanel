<?php
session_start();

$modechanger = strip_tags($_GET['darkmode']); 

$_SESSION["darkmode"] = $modechanger; 

echo $_SESSION["darkmode"];
echo $modechanger;

?>