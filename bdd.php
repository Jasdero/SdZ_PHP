<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>


<?php

include "connexion.php";

$response = $db->query('SELECT * FROM jeux_video LIMIT 10');
?>
    <table class="table">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Console</th>
            <th>Possesseur</th>
            <th>Prix</th>
            <th>Nb joueurs</th>
            <th>Commentaire</th>
        </tr>
        </thead>
        <tbody>

<?php
while ($data = $response->fetch()) {
    ?>

        <tr>
            <td><?php echo $data['nom'] ?></td>
            <td><?php echo $data['console'] ?></td>
            <td><?php echo $data['possesseur'] ?></td>
            <td><?php echo $data['prix'] ?></td>
            <td><?php echo $data['nbre_joueurs_max'] ?></td>
            <td><?php echo $data['commentaires'] ?></td>
        </tr>

    <?php
}
$response->closeCursor();

?>
        </tbody>
    </table>
</body>
</html>
