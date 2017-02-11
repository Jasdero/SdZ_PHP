<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php

include 'connexion.php';

$response = $db->prepare('SELECT * FROM commentaires WHERE id_billet = :billet_id ORDER BY date_creation DESC');

$response->execute(
    array('billet_id' => $_GET['id'])
);

while($data = $response->fetch()){
?>
<p>Auteur : <?php echo $data['auteur'] ?> Message : <?php echo $data['commentaire'] ?></p>
<?php
}
$response->closeCursor();
?>
</body>
</html>