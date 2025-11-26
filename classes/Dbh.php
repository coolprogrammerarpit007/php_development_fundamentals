<?php

class Dbh
{
    private $host = 'localhost';
    private $dbname = 'myFirstDatabase';
    private $dbusername = 'root';
    private $password = '';


    protected function connect()
{
    try {
        $pdo = new PDO(
            "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=utf8mb4",
            $this->dbusername,
            $this->password,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_PERSISTENT => false
            ]
        );

        return $pdo;  // return connection
    } catch (PDOException $e) {
        die("Connection Failed: " . $e->getMessage());
    }
}
}