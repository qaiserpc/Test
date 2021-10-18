<?php

/**
 * Created by PhpStorm.
 * User: qaisernaeem
 * Date: 2021-10-17
 * Time: 00:38
 */

class DatabaseConnection
{

    public function getConnection()
    {
        $servername = "mysql";
        $username = "root";
        $password = "root";
        $database = "phalcon_app";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            return ("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    public function query($conn)
    {
        $results = $conn->query("select * from users");
        $conn -> close();
        return $results -> fetch_all();
    }


}