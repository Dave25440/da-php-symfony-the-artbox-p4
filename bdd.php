<?php

const MYSQL_HOST = 'localhost';
const MYSQL_PORT = 3306;
const MYSQL_NAME = 'artbox';
const MYSQL_USER = 'root';
const MYSQL_PASSWORD = '';

try {
    $mysqlClient = new PDO(
        'mysql:host='.MYSQL_HOST.';dbname='.MYSQL_NAME.';port='.MYSQL_PORT.';charset=utf8',
        MYSQL_USER,
        MYSQL_PASSWORD,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>