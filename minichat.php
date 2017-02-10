<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">

        <form action="minichat_post.php" method="post">
            <div class="form-group">
                <label for="pseudo">Votre Pseudo</label>
                <input type="text" class="form-control" name="pseudo" id="pseudo">
                <textarea class="form-control" name="contenu" id="contenu" rows="3">Votre message ici</textarea>
                <input type="submit" class="btn btn-info center-block" value="valider">
            </div>

        </form>
    </div>
</div>
<?php

include "connexion.php";

$response = $db->query('SELECT * FROM minichat ORDER BY id DESC LIMIT 10');

while ($data = $response->fetch()) {


    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6">
                <p><strong><?php echo $data['nom'] ?></strong> : <?php echo $data['contenu'] ?></p>
            </div>
        </div>
    </div>
    <?php
}
$response->closeCursor();
?>
</body>
</html>
