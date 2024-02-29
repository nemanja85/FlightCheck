<?php

function insertFlightInfo(PDO $conn, string $code, string $city, string $country): bool
{
    $sql = "INSERT IGNORE INTO filghts(code, city, country) VALUES(:code, :city, :country)";

    $statement = $conn->prepare($sql);
    return $statement->execute([
        ":code" => $code,
        ":city" => $city,
        ":country" => $country
    ]);
}

function updateFlightInfo(PDO $conn, int $id, string $code, string $city, string $country): bool
{
    $sql = "UPDATE filghts SET $code=:code, $city=:city, $country=:country WHERE $id=:id";

    $statement = $conn->prepare($sql);
    return $statement->execute([
        ":id" => $id,
        ":code" => $code,
        ":city" => $city,
        ":country" => $country
    ]);
}

function deleteFlightInfo(PDO $conn, string $code): bool
{
    $sql = "DELETE FROM filghts WHERE $code = :code";

    $statement = $conn->prepare($sql);
    $statement->bindParam(':code', $code);
    return $statement->execute();
}