<?php
session_start();
if(!isset($_SESSION['Nom'])){
header("Location:Etulog.php");
exit(); }
?>