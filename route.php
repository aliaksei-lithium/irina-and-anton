<?php

require_once("controller/CommentController.php");
require_once("entity/Comment.php");

if (isset($_POST["cmd"])) {
    switch ($_POST['cmd']) {
        case 'add':
            addComment();
            break;
        default:
            break;
    }
} else if (isset($_GET["cmd"])) {
    switch ($_GET["cmd"]) {
        case 'delete':
            deleteComment();
            break;
    }
}

function deleteComment()
{
    $commentsController = new CommentController();
    $commentsController->deleteComment($_GET["comment_id"]);
}

function addComment()
{
    $commentsController = new CommentController();
    $commentsController->addComment(new Comment($_POST["owner-name"], $_POST["comment-text"]));

}