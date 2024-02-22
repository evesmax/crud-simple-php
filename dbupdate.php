<?php
$db=$_REQUEST["cmbdb"];
$_SESSION["db"]=$db;
echo $_SESSION["db"];
header('Location: index.php');

?>
