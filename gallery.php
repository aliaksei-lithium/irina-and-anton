<!DOCTYPE html>
<html>
<head>
	<title>Fotorama example</title>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<link rel="stylesheet" href="/static/fotorama.css">
	<link rel="stylesheet" href="/static/gallery.css">
	<script type="text/javascript" src="/static/fotorama.js"></script>
</head>
<body style="background-position: 0 0; background: url(/static/images/bubbles_opacity.png) repeat 0 0;width: 100%;height: 100%; z-index: 50;">

	<div class="fotorama-header" style="z-index: 100;">
		<!-- header -->
		<div style="letter-spacing: 1px; margin: 15px 0 30px; font-weight: bold; font-size: 16px;">
			<a href="/index.php" style="text-decoration: none; color: #000;">back</a>
		</div>
		<!-- /header -->
	</div>

	<div class="wrapper" style="z-index: 100;">

		<header class="header" style="z-index: 100;">
			<h1 class="logo">Gallery</h1>
			
		</header>

		<div class="posts" style="z-index: 100;" >
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