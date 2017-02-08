<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password</title>
</head>
<body>
<h2>Access to NASA data</h2>
<form action="index.php" method="post">
    <label for="pass">Enter your password</label>
    <input type="password" name="pass" id="pass">
    <input type="submit" value="Send">
</form>
<?php
if (empty($_POST['pass']) || $_POST['pass'] != 'kangourou')
    {

    echo '<h2>Need the good password to access data</h2>';

    } else {
    for ($i = 0; $i <= 10; $i++) {
        echo '<li>' . rand(50000, 99999) . '</li>';
    }
}
?>

</body>
</html>