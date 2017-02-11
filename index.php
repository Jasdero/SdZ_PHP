<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>
<body>
<h2>My blog</h2>
<?php
include 'connexion.php';

$response = $db->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y %Hh%imin%ss\') as date_creation FROM billets ORDER BY date_creation DESC');

while ($data = $response->fetch()){
?>
    <h3> Billet n°<?php echo $data['id'] ?> du <?php echo $data['date_creation'] ?></h3>
    <p><?php echo $data['contenu'] ?> <br>
        <a href="commentaires.php?id=<?php echo $data['id'] ?>">Commentaires</a>
    </p>
<?php
}
$response->closeCursor();
?>

</body>
</html>