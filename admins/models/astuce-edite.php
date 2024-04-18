<?php 

$db = db();

$req = $db->prepare("SELECT * FROM tb_astuce WHERE id = ?");
$req->execute([ $_GET['id'] ]);