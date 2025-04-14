<?php
function dbConnect(string $db): ?PDO
{
    try {
        $dir = 'sqlite://home/nemanja/Code/personal/FlightCheck/analytics.sqlite';
        return new PDO($dir);
    } catch (PDOException $exception) {
        dd($exception->getMessage());
        return null;
    }
}

