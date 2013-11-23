<!DOCTYPE html>
<?php
/*  require_once('controller/CommentController.php');
  $c = new CommentController();*/
 ?>
<html>
<head>
    <title>Irina and Anton</title>
    <link rel="stylesheet" href="/static/css/styles.css"/>
</head>
<body>
<h1>Add your Comment!</h1>

<form id = "comment-form" action="route.php" method="post">
    <input type="hidden" name="cmd" value="add">
    <div class="line">
        <label for="owner-name">Name:</label>
        <input type="text" id="owner-name" name = "owner-name"/>
    </div>
    <div class="line">
        <label for="comment-text">Congratulations:</label>
        <textarea id="comment-text"  name = "comment-text" rows="15" maxlength="500"></textarea>
    </div>
    <div class="line">
        <button type="submit">And have fun!</button>
    </div>
</form>

</body>
</html>