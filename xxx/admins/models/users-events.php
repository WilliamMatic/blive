<?php
// Connexion à la base de données

$db = db();

// Requête SQL pour récupérer le nombre d'utilisateurs enregistrés par date
$sql = "
    SELECT COUNT(tb_users_events.user) AS nbrusers, tb_astuce.titre AS astuces
    FROM tb_users_events RIGHT JOIN tb_astuce 
    ON tb_users_events.event = tb_astuce.id
    GROUP BY tb_astuce.titre
";
$stmt = $db->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Création des tableaux pour les données du graphique
$astuces = [];
$nombreUtilisateurs = [];

foreach ($rows as $row) {
    $astuces[] = $row['astuces'];
    $nombreUtilisateurs[] = $row['nbrusers'];
}

