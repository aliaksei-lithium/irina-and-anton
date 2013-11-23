<?php

function createConnection()
{

    $hostname = "localhost";
    $username = "irinaand_anton";
    $password = "12345qwert";
    $database = "irinaand_anton";

    $mysqli = new mysqli($hostname, $username, $password, $database);

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    return $mysqli;

}

function closeConnection($mysqli)
{
    $mysqli->close();
}

function submitForm($mysqli)
{
    $ownerName = $_POST["owner-name"];
    $text = $_POST["comment-text"];

    $stmt = $mysqli->prepare("INSERT INTO comments (owner_name, text) VALUES(?, ?)");
    $stmt->bind_param('ss', $ownerName, $text);

    $stmt->execute();

    printf("%d Row inserted.\n", $stmt->affected_rows);
    /*if (!mysqli_query($mysqli, $stmt)) {
        die('Error: ' . mysql_error());
    }*/
    echo "1 record added";
    $stmt->close();
    closeConnection($mysqli);

    header('Location: index.php');
}

$mysqli = createConnection();

submitForm($mysqli);

