<?php
    require_once './helpers/functions.php';
    require 'config/db.php';
    require __DIR__ . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    $dotenv->required(['DB_HOST', 'DB_USER', 'DB_PASSWORD']);

