<?php

class PostDAO
{
    private $connectionManager;
    private $selectAllSql = "SELECT * FROM post";
    private $insertStmt = "INSERT INTO post (post_text) VALUES(?)";
    private $deleteStmt = "DELETE FROM post WHERE post_id = ?";

    function __construct($connectionManager)
    {
        $this->connectionManager = $connectionManager;
    }

    private function closeConn($conn)
    {
        $this->connectionManager->closeConnection($conn);
    }

    public function getConn()
    {
        return $this->connectionManager->createConnection();
    }

    public function fetchAll()
    {
        $conn = $this->getConn();
        $result = mysqli_query($conn, $this->selectAllSql);

        $entities = array();

        if ($result) {

            while ($row = $result->fetch_assoc()) {
                $entities[] = $row;
            }

            $result->free();
        }

        $this->connectionManager->closeConnection($conn);

        return ($entities);

    }

    public function add($entity)
    {
        $conn = $this->getConn();
        $stmt = $conn->prepare($this->insertStmt);
        $stmt->bind_param('ss', $entity->getText());

        $stmt->execute();

        printf("%d Row inserted.\n", $stmt->affected_rows);

        $stmt->close();

        $this->closeConn($conn);
    }

    public function delete($id)
    {
        $conn = $this->getConn();
        $stmt = $conn->prepare($this->deleteStmt);
        $stmt->bind_param('i', $id);

        $stmt->execute();

        printf("%d Row deleted.\n", $stmt->affected_rows);

        $stmt->close();

        $this->closeConn($conn);
    }

} 