<?php 

$db = db();

$req = $db->query(" SELECT COUNT(*) AS users FROM tb_users  ");

$date = date('Y-m-d');