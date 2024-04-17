<?php 

$db = db();

$req = $db->prepare(" SELECT COUNT(*) AS eventsactifs FROM tb_astuce WHERE date_event >= ? AND datepublish BETWEEN ? AND ?  ");

$date = date('Y-m-d');

$req->execute([ $date, $_SESSION['datedeb'], $_SESSION['datefin'] ]);