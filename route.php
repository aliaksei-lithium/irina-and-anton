<?php

require_once("controller/CommentController.php");
require_once("entity/Comment.php");
require_once("entity/Image.php");
require_once("entity/Post.php");

if (isset($_POST["cmd"])) {
    switch ($_POST['cmd']) {
        case 'add':
            addComment();
            break;
		case 'addImage':
            addImage();
            break;
		case 'addPost':
            addPost();
            break;
        default:
            break;
    }
} else if (isset($_GET["cmd"])) {
    switch ($_GET["cmd"]) {
        case 'delete':
            deleteComment();
            break;
		case 'deleteImage':
            deleteImage();
            break;
		case 'deletePost':
            deletePost();
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
    return $commentsController->fetchAllImages();
}


function addImage()
{
    $commentsController = new CommentController();
    $commentsController->addImage(new Image(htmlentities($_POST["image-text"])));

}

function deleteImage()
{
    $commentsController = new CommentController();
    $commentsController->deleteImage($_GET["image_id"]);
}


function fetchAllPosts()
{
    $commentsController = new CommentController();
    return $commentsController->fetchAllPosts();
}


function addPost()
{
    $commentsController = new CommentController();
    $commentsController->addPost(new Post(htmlentities($_POST["post-text"])));

}

function deletePost()
{
    $commentsController = new CommentController();
    $commentsController->deletePost($_GET["post_id"]);
}