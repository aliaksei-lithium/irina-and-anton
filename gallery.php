<!DOCTYPE html>
<html>
<head>
	<title>Irina and Anton gallery</title>
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
			
			<h1 class="logo">Gallery</h1>
		</header>

		<div class="posts" style="z-index: 100;" >
			<article class="post">
				<div class="post__content">
					<button  style = "margin-left: 10px" onclick="gotoIndex();" class="btn btn-md btn-info" >Back</button>
					<button  style = "margin-left: 10px" onclick="gotoImageForm();" class="btn btn-md btn-info" >Add image</button>
				</div>
			</article>
			<article class="post">
				<h2 class="post__title">Irina&Anton</h2>
				<div class="post__content">

					<div class="fotorama" data-width="100%" data-height="auto" data-aspectRatio="1.5" data-nav="dots"> <!-- 960/660 = 1.5-->
						<?php
							require_once("route.php");
							$images = fetchAllImages();
							
							foreach($images as $image) {
							   echo '<a href='.$image["image_url"].'><img src='.$image["image_url"].'></a>';
							}
						?>

					</div>
				</div>
			</article>



		</div>

	</div>


</body>
</html>