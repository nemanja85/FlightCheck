<?php

const DB_PATH = '/home/nemanja/Code/personal/FlightCheck/analytics.sqlite';
function dbConnect(string $db): ?PDO
{
    try {

        $dir = "sqlite:$db";

        $pdo = new PDO($dir);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    } catch (PDOException $exception) {
        dd($exception->getMessage());
    }
}