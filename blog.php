<!DOCTYPE html>
<html>
<head>
	<title>Irina and Anton blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
	
	
	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<link rel="stylesheet" href="/static/fotorama.css">
	<link rel="stylesheet" href="/static/gallery.css">
	<link href="/static/FlatUI/css/flat-ui.css" rel="stylesheet">
	<script type="text/javascript" src="/static/fotorama.js"></script>
	<script src="/static/js/main.js"></script>
</head>
<body style="background-position: 0 0; background: url(/static/images/bubbles_opacity.png) repeat 0 0;width: 100%;height: 100%; z-index: 50;">

	<div class="fotorama-header" style="z-index: 100;">
		<!-- header -->
		<div style="letter-spacing: 1px; margin: 15px 0 30px; font-weight: bold; font-size: 16px;">
			

		</div>
		<!-- /header -->
	</div>

	<div class="wrapper" style="z-index: 100;">

		<header class="header" style="z-index: 100;">
			<h1 class="logo">Microblog</h1>
			
		</header>

		<div class="posts" style="z-index: 100;" >
			<article class="twit-post">
				<div class="post__content">
					<button  style = "margin-left: 10px" onclick="gotoIndex();" class="btn btn-md btn-info" >Back</button>
					<button  style = "margin-left: 10px" onclick="gotoPostForm();" class="btn btn-md btn-info" >Add post</button>
				</div>
			</article>
			<?php
				require_once("route.php");
				$posts = fetchAllPosts();
				
				foreach($posts as $twit) {
					echo '<article class="twit-post">';
					echo '<div class="post__content">';
				    echo html_entity_decode(htmlspecialchars_decode($twit["post_text"]));
					echo '</div>';
					echo '</article>';
				}
			?>

		</div>

	</div>


</body>
</html>