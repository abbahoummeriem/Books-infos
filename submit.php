<?php
$title = $_POST['title'];
$author = $_POST['author'];
$year = $_POST['year'];

if(empty($title) || empty($author) || empty($year)) {
    echo "Erreur : Tous les champs sont requis.";
} else {
    echo "Livre enregistré avec succès :<br>";
    echo "Titre : " . htmlspecialchars($title) . "<br>";
    echo "Auteur : " . htmlspecialchars($author) . "<br>";
    echo "Année de publication : " . htmlspecialchars($year);
}
?>
