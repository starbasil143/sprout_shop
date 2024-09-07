<?php

class Database
{
    public function getDatabaseConnection()
    {
        $db_host = "localhost";
        $db_name = "part2luke";
        $db_user = "root";
        $db_pass = "";

        try
        {
            $dsn = "mysql:host=". $db_host . ";dbname=" . $db_name;

            $pdo = new PDO($dsn, $db_user, $db_pass);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}
