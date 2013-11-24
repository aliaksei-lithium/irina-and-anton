<?php

require_once("controller/CommentController.php");
require_once("entity/Comment.php");
require_once("entity/Image.php");

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
        case 'fetch':
            fetchAllComments();
            break;
        default:
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
    $commentsController->addComment(new Comment(htmlentities($_POST["owner-name"]), htmlentities($_POST["comment-text"])));

}

function fetchAllComments()
{
    $commentsController = new CommentController();
    $comments = $commentsController->fetchAllComments();
    //header('Content-Type: application/json; charset=utf-8');
    echo json_encode($comments);

}


function fetchAllImages()
{
    $commentsController = new CommentController();
    $images = $commentsController->fetchAllImages();
	return $images;
}