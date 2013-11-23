<?php

class ConnectionManager
{
    private $hostname = "localhost";
    private $username = "irinaand_anton";
    private $password = "12345qwert";
    private $database = "irinaand_anton";

    private $mysqli;

    public function createConnection()
    {
        $this->mysqli = new mysqli($this->hostname, $this->username, $this->password, $this->database);

        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        return $this->mysqli;

    }

    public function closeConnection()
    {
        $this->mysqli->close();
    }
} 