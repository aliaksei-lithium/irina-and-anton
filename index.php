<!DOCTYPE html>
<?php

include_once("controller/CommentController.php");
$commentsController = new CommentController();
?>
<html>
<head>
    <title>Irina and Anton</title>
</head>
<body>
<h1>This is Irina and Anton wedding celebration page!</h1>
<a href="addComment.php">Add your congratulation!</a>

<div id="skrollr-body">
    <p>
        <?php
        $comments = $commentsController->fetchAllComments();

        foreach ($comments as $comment) {
            printf("Name: %s <br/> comment: %s <br/>", $comment["owner_name"], $comment["text"]);
        }

        ?>
    </p>

</div>

<script type="text/javascript" src="/static/js/skrollr.min.js"></script>

<script type="text/javascript">

</script>

</body>
</html>
