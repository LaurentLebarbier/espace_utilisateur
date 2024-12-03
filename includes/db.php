<?php

$pdo = new PDO('mysql:host=localhost;dbname=espace_utilisateur;charset=utf8', 'laurent', 'h9xt2ya1', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);
