<?php
session_start();
unset( $_SESSION['USERTYPE']);
header("Location:../index.php");

?>