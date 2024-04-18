<?php  

// function db()
// {
//   try {
//     $db = new PDO('mysql:host=localhost;dbname=u620751964_blive;charset=utf8', 'u620751964_blive', 'Y9S5|dm9!vP', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
//     return $db;
//   } catch (Exception $e) {
//     die("Erreur lors de la connexion au serveur");
//   }
// }

function db()
{
  try {
    $db = new PDO('mysql:host=localhost;dbname=blive;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    return $db;
  } catch (Exception $e) {
    die("Erreur lors de la connexion au serveur");
  }
}
