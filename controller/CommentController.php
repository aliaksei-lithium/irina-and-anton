<?php

function __autoload($class){
    require_once("dao/".$class.".php");
}
//include_once("../dao/ConnectionManager.php");
//include_once("../dao/CommentsDAO.php");

class CommentController
{
    private $comment;
    private $commentsDAO;
    private $connManager;

    function __construct()
    {
        $this->connManager = new ConnectionManager();
        $this->commentsDAO = new CommentsDAO($this->connManager);
    }

    public function addComment($comment)
    {
        $this->commentsDAO->addComment($comment);
        header('Location: index.php');
    }

    public function deleteComment($id)
    {
        $this->commentsDAO->deleteComment($id);
        header('Location: index.php');
    }

    public function fetchAllComments()
    {
        $comments = $this->commentsDAO->fetchAllComments();
        return $comments;
    }

    private function parseForm()
    {
        $this->comment->setOwnerName($_POST["owner-name"]);
        $this->comment->setText($_POST["comment-text"]);
    }

}