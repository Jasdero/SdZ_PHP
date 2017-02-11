<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 10/02/17
 * Time: 09:14
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'Gurth4ng25!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}