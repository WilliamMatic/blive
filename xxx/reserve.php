<?php

// Clé d'API YouTube
$api_key = 'AIzaSyDO73Lk3wzr1YoERhqjIo86Nak-HxamULo';

// URL de l'API pour récupérer les catégories thématiques de YouTube
$url = "https://www.googleapis.com/youtube/v3/videoCategories?part=snippet&regionCode=CD&key=$api_key";

// Initialiser cURL
$curl = curl_init();

// Configuration de cURL
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Exécuter la requête cURL
$response = curl_exec($curl);

// Fermer la session cURL
curl_close($curl);

// Convertir la réponse JSON en tableau associatif
$result = json_decode($response, true);

// Vérifier si la requête a réussi
if ($result) {
    // Créer un tableau HTML pour afficher les catégories thématiques
    echo '<table border="1">';
    echo '<tr><th>ID</th><th>Nom</th></tr>';
    
    // Parcourir les catégories et afficher les détails
    foreach ($result['items'] as $item) {
        $category_id = $item['id'];
        $category_title = $item['snippet']['title'];
        
        echo "<tr><td>$category_id</td><td>$category_title</td></tr>";
    }
    
    echo '</table>';
} else {
    // Afficher un message d'erreur si la requête a échoué
    echo "Une erreur s'est produite lors de la récupération des catégories thématiques.";
}

?>
