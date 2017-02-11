<?php

include 'connexion.php';

$write = $db->prepare('INSERT INTO minichat(nom, contenu, date_creation) VALUES (:pseudo, :contenu, :date_creation)');

    if (isset($_POST['pseudo']) && isset($_POST['contenu'])){

        $pseudo = htmlentities($_POST['pseudo']);
        $contenu = htmlentities($_POST['contenu']);
        $date = new DateTime();
        setcookie('pseudo', $pseudo, time()+(365*3600*24));
        $write->execute(array(
            'pseudo' => $pseudo,
            'contenu' => $contenu,
            'date_creation' => $date->format('Y-m-d h:i:s'),
        ));

    }

header('Location: minichat.php');