<?php
function dbConnect(string $host, int $port, string $db, string $user, string $password, string $charset = "UTF8"): ?PDO
{
    $dsn = "mysql:host=%s;dbname=%s;charset=%s;port=%d";

    try {
        return new PDO(sprintf($dsn, $host, $db, $charset, $port), $user, $password, [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    } catch (PDOException $exception) {
        //dd($exception->getMessage());
        return null;
    }
}

