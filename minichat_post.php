<?php

include 'connexion.php';

$write = $db->prepare('INSERT INTO minichat(nom, contenu) VALUES (:pseudo, :contenu)');

    if (isset($_POST['pseudo']) && isset($_POST['contenu'])){

        $pseudo = htmlentities($_POST['pseudo']);
        $contenu = htmlentities($_POST['contenu']);
        $write->execute(array(
            'pseudo' =>$pseudo,
            'contenu'=>$contenu,
        ));

    }

header('Location: minichat.php');