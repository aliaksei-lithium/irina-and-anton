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
	private $image;
	private $imageDAO;
	private $post;
	private $postDAO;
    private $connManager;

    function __construct()
    {
        $this->connManager = new ConnectionManager();
        $this->commentsDAO = new CommentsDAO($this->connManager);
		$this->imageDAO = new ImageDAO($this->connManager);
		$this->postDAO = new PostDAO($this->connManager);
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
	
	
	
	public function addImage($image)
    {
        $this->imageDAO->add($image);
        header('Location: gallery.php');
    }

    public function deleteImage($id)
    {
        $this->imageDAO->delete($id);
        header('Location: gallery.php');
    }

    public function fetchAllImages()
    {
        $comments = $this->imageDAO->fetchAll();
        return $comments;
    }
	
	
	
	public function addPost($post)
    {
        $this->postDAO->add($post);
        header('Location: index.php');
    }

    public function deletePost($id)
    {
        $this->postDAO->delete($id);
        header('Location: gallery.php');
    }

    public function fetchAllPosts()
    {
        $comments = $this->postDAO->fetchAll();
        return $comments;
    }
	

}