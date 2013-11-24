<?php

class ConnectionManager
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "12345qwert";
    private $database = "irinaand_anton";

    private $mysqli;

    public function createConnection()
    {
        $link = new mysqli($this->hostname, $this->username, $this->password, $this->database);

        mysqli_set_charset($link, 'utf8');

        $this->mysqli = $link;

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