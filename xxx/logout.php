<?php 

session_start();

unset($_SESSION['id']);
unset($_SESSION['nom']);
unset($_SESSION['phone']);
unset($_SESSION['email']);
unset($_SESSION['avatar']);
unset($_SESSION['password']);

session_destroy();

header("Location: login.html");