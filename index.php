<!DOCTYPE html>
<html>
<head>
    <title>Irina and Anton</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">

    <link href="/static/css/fixed-positioning.css" rel="stylesheet" type="text/css">
    <link href="/static/css/main.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="/static/twelve/galleria.twelve.css">

    <!-- Loading Bootstrap -->
    <link href="/static/FlatUI/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="/static/FlatUI/css/flat-ui.css" rel="stylesheet">
    <link href="/static/css/styles.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="/static/FlatUI/js/html5shiv.js"></script>
    <![endif]-->

    <script src="/static/js/main.js"></script>
    <link rel="icon"
          href="/favicon.ico" />
</head>
<body>
<div class="container">
<!--Bubbles background-->
<div style="background-position: 0 0; opacity: 0.5" class="skrollable skrollable-between" id="bg1" data-0="background-position:0px 0px;" data-end="background-position:-500px -10000px;"></div>
<div style="background-position: 0 0; opacity: 0.5" class="skrollable skrollable-between" id="bg2" data-0="background-position:0px 0px;" data-end="background-position:-500px -8000px;"></div>
<div style="background-position: 0 0; opacity: 0.5" class="skrollable skrollable-between" id="bg3" data-0="background-position:0px 0px;" data-end="background-position:-500px -6000px;"></div>

<div class="skrollable skrollable-between" id="intro"
     data-0="opacity:1;top:3%;transform:rotate(0deg);transform-origin:0 0;"
     data-500="opacity:0;top:-10%;transform:rotate(-90deg);">
    <h1 >Irina and Anton wedding celebration page!</h1>
    <p class="lead" >from dear colleagues with love</p>
    <div>
        <img style="cursor: pointer" src="/static/FlatUI/images/icons/svg/gift-box.svg" alt="Gift-Box" onclick="gotoComments();">
        <button  style = "margin-left: 10px" onclick="gotoComments();" class="btn btn-md btn-danger" >Add your congratulation!</button>
		
		<button  style = "margin-left: 10px" onclick="gotoImages();" class="btn btn-md btn-info" >Gallery</button>
		<button  style = "margin-left: 10px" onclick="gotoBlog();" class="btn btn-md btn-info" >Blog</button>
    </div>
<div style = "margin-top: 25px;">
    <a id = "photos-link" href="#photos">credits</a>
</div >

    <p class="arrows">&#9660;&nbsp;&#9660;&nbsp;just scroll&nbsp;&#9660;&nbsp;&#9660;</p>
</div>
<div class="comments-wrapper">


</div>

    <div style="min-height: 600px;"
         id="photos">
    <h6 style="text-align: center">Thank you!</h6>
        <div style = "width: 670px; margin: 0 auto;">
            <img style=" width: 670px; height: 367px;"  class="img-rounded img-responsive" src="http://l-oo.ru/_ph/6/346710612.jpg"  />
        </div>
        <div style="font-size: 14px; position: absolute; bottom: 0; padding: 10px">
            Designed by <a href="mailto:aliaksei_zhynhiarouski@epam.com">Aliaksei Zhynhiarouski</a> and <a href="mailto:Anton_Siamashka@epam.com">Anton Siamashka</a><br />
            Github: <a href="https://github.com/daigotsu/irina-and-anton">Irina and Anton project</a> <br />
            Copyright © 2013, license <a href="https://github.com/daigotsu/irina-and-anton/blob/master/LICENSE">MIT</a>
        </div>
</div>

<div style="top: 0; margin-top: 2px;" class="skrollable skrollable-between" id="scrollbar" data-0="top:0%;margin-top:2px;" data-end="top:100%;margin-top:-52px;"></div>
</div>
<script type="text/javascript" src="/static/js/skrollr.min.js"></script>
<script type="text/javascript" src="/static/js/skrollr.menu.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="/static/js/galleria-1.3.3.min.js"></script>
<script src="/static/twelve/galleria.twelve.min.js"></script>

<script type="text/javascript">
    var APP = APP || {};

    APP.comments = "";
    $.get("/route.php?cmd=fetch", function(json) {
        APP.comments = JSON.parse(json);
        APP.printComments(APP.comments);
    });


</script>

</body>
</html>
