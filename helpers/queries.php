<?php

function insertFlightInfo(PDO $conn, string $code, string $city, string $country): bool
{
    try {
        $sql = "INSERT INTO flights(id, code, city, country) VALUES(null,:code, :city, :country)";

        $statement = $conn->prepare($sql);
        return $statement->execute([
            ":code" => $code,
            ":city" => $city,
            ":country" => $country
        ]);
    } catch (PDOException $e) {
        error($e->getMessage());
    }

}

function updateFlightInfo(PDO $conn, int $id, string $code, string $city, string $country): bool
{
    try {
        $sql = "UPDATE filghts SET $code=:code, $city=:city, $country=:country WHERE $id=:id";

        $statement = $conn->prepare($sql);
        return $statement->execute([
            ":id" => $id,
            ":code" => $code,
            ":city" => $city,
            ":country" => $country
        ]);
    } catch (PDOException $e){
        error($e->getMessage());
    }

}

function deleteFlightInfo(PDO $conn, string $code): bool
{
    try {
        $sql = "DELETE FROM flights WHERE code = :code";

        $statement = $conn->prepare($sql);
        $statement->bindParam(':code', $code);
        $statement->execute();
        return $statement->rowCount() > 0;
    } catch (PDOException $e){
        dump($e->getMessage());
        return false;
    }
}

function getFlights(Pdo $conn):array
{
    $sql = "SELECT * FROM filghts";
    $statement = $conn->prepare($sql);
    $statement->execute();
   return $statement->fetchAll(PDO::FETCH_CLASS);
}
