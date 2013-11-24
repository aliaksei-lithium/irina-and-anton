<!DOCTYPE html>
<html>
<head>
	<title>Irina and Anton blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">

    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

    <!-- Loading Bootstrap -->
    <link href="/static/FlatUI/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="/static/FlatUI/css/flat-ui.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/static/twelve/galleria.twelve.css">
    <script src="/static/js/main.js"></script>

    <style>
        body {
            background: url(/static/images/bubbles_opacity.png) repeat 0 0;
            width: 100%;
            height: 100%;
            z-index: 50;
        }

        .container {
            width: 100%;
        }
        .buttons-group {
            width: 200px;
            margin: 170px auto 0 30px;
            vertical-align: middle;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h1>Microblog</h1>

            <div class="posts" style="z-index: 100;" >
                <article class="twit-post" style="margin-bottom: 100px">
                    <div>
                        <button  style = "margin-left: 10px" onclick="gotoIndex();" class="btn btn-md btn-info" >Back</button>
                        <button  style = "margin-left: 10px" onclick="gotoPostForm();" class="btn btn-md btn-info" >Add post</button>
                    </div>
                </article>
                <?php
                require_once("route.php");
                $posts = fetchAllPosts();

                foreach($posts as $twit) {
                    echo '<article class="twit-post">';
                    echo '<blockquote>';
                    echo html_entity_decode(htmlspecialchars_decode($twit["post_text"]));
                    echo '</blockquote>';
                    echo '</article>';
                }
                ?>

            </div>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
</div>
</body>
</html>