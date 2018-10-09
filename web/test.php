<?php
session_start();

$_SESSION['games'] = $_POST['selections'];
header("Location:browse.php");

?>
