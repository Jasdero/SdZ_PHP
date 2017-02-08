<?php

if (empty($_POST['pass'])){
    echo 'Please enter a password';
} elseif ($_POST['pass']!= 'kangourou'){
    echo 'Wrong password !';
} else {
    for($i=0;$i<=10;$i++){
        echo '<li>'.rand(50000,99999).'</li>';
    }
}