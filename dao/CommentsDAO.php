<?php

class CommentsDAO
{
    private $connectionManager;
    private $selectCommentsSql = "SELECT * FROM comments";
    private $insertCommentStmt = "INSERT INTO comments (owner_name, text) VALUES(?, ?)";
    private $deleteCommentStmt = "DELETE FROM comments WHERE comment_id = ?";

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

    public function fetchAllComments()
    {
        $conn = $this->getConn();
        $result = mysqli_query($conn, $this->selectCommentsSql);

        $comments = array();

        if ($result) {

            while ($row = $result->fetch_assoc()) {
                $comments[] = $row;
            }

            $result->free();
        }

        $this->connectionManager->closeConnection($conn);

        return ($comments);

    }

    public function addComment($comment)
    {
        $conn = $this->getConn();
        $stmt = $conn->prepare($this->insertCommentStmt);
        $stmt->bind_param('ss', $comment->getOwnerName(), $comment->getText());

        $stmt->execute();

        printf("%d Row inserted.\n", $stmt->affected_rows);

        $stmt->close();

        $this->closeConn($conn);
    }

    public function deleteComment($id)
    {
        $conn = $this->getConn();
        $stmt = $conn->prepare($this->deleteCommentStmt);
        $stmt->bind_param('i', $id);

        $stmt->execute();

        printf("%d Row deleted.\n", $stmt->affected_rows);

        $stmt->close();

        $this->closeConn($conn);
    }

} 