<?php 

session_start();
$_SESSION['datedeb'] = $_POST['datedeb'];
$_SESSION['datefin'] = $_POST['datefin'];

header("Location: ../dashboard");
exit();