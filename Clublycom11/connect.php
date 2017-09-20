<?php
session_start();
ini_set('display_errors',1);
ini_set('error_reporting',E_ALL);
$dsn = 'mysql:dbname=lycom11;host=127.0.0.1';
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}