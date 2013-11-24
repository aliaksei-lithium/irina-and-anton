<!DOCTYPE html>
<html>
<head>
    <title>Irina and Anton</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">

    <link href="/static/css/fixed-positioning.css" rel="stylesheet" type="text/css">
    <link href="/static/css/main.css" rel="stylesheet" type="text/css">
    <!--<link type="text/css" rel="stylesheet" href="/static/css/galleria.classic.css">-->
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
    <a id = "photos-link" href="#photos">Photo gallery</a>
</div >

    <p class="arrows">&#9660;&nbsp;&#9660;&nbsp;just scroll&nbsp;&#9660;&nbsp;&#9660;</p>
</div>
<div class="comments-wrapper">


</div>

    <div style="min-height: 600px;"
         id="photos">
    <h6 style="text-align: center">Share your photo</h6>
    <div id="galleria">
        <a href="http://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Biandintz_eta_zaldiak_-_modified2.jpg/800px-Biandintz_eta_zaldiak_-_modified2.jpg">
            <img
                src="http://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Biandintz_eta_zaldiak_-_modified2.jpg/100px-Biandintz_eta_zaldiak_-_modified2.jpg"
                data-big="http://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Biandintz_eta_zaldiak_-_modified2.jpg/1280px-Biandintz_eta_zaldiak_-_modified2.jpg"
                data-title="Biandintz eta zaldiak"
                data-description="Horses on Bianditz mountain, in Navarre, Spain."
                >
        </a>
        <a href="http://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Athabasca_Rail_at_Brule_Lake.jpg/800px-Athabasca_Rail_at_Brule_Lake.jpg">
            <img
                src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Athabasca_Rail_at_Brule_Lake.jpg/100px-Athabasca_Rail_at_Brule_Lake.jpg"
                data-big="http://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Athabasca_Rail_at_Brule_Lake.jpg/1280px-Athabasca_Rail_at_Brule_Lake.jpg"
                data-title="Athabasca Rail"
                data-description="The Athabasca River railroad track at the mouth of Brulé Lake in Alberta, Canada."
                >
        </a>
        <a href="http://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Back-scattering_crepuscular_rays_panorama_1.jpg/1280px-Back-scattering_crepuscular_rays_panorama_1.jpg">
            <img
                src="http://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Back-scattering_crepuscular_rays_panorama_1.jpg/100px-Back-scattering_crepuscular_rays_panorama_1.jpg"
                data-big="http://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Back-scattering_crepuscular_rays_panorama_1.jpg/1400px-Back-scattering_crepuscular_rays_panorama_1.jpg"
                data-title="Back-scattering crepuscular rays"
                data-description="Picture of the day on Wikimedia Commons 26 September 2010."
                >
        </a>
        <a href="http://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Interior_convento_3.jpg/800px-Interior_convento_3.jpg">
            <img
                src="http://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Interior_convento_3.jpg/120px-Interior_convento_3.jpg"
                data-big="http://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Interior_convento_3.jpg/1400px-Interior_convento_3.jpg"
                data-title="Interior convento"
                data-description="Interior view of Yuriria Convent, founded in 1550."
                >
        </a>
        <a href="http://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg/800px-Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg">
            <img
                src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg/100px-Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg"
                data-big="http://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg/1280px-Oxbow_Bend_outlook_in_the_Grand_Teton_National_Park.jpg"
                data-title="Oxbow Bend outlook"
                data-description="View over the Snake River to the Mount Moran with the Skillet Glacier."
                >
        </a>
        <a href="http://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Hazy_blue_hour_in_Grand_Canyon.JPG/800px-Hazy_blue_hour_in_Grand_Canyon.JPG">
            <img
                src="http://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Hazy_blue_hour_in_Grand_Canyon.JPG/100px-Hazy_blue_hour_in_Grand_Canyon.JPG"
                data-big="http://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Hazy_blue_hour_in_Grand_Canyon.JPG/1280px-Hazy_blue_hour_in_Grand_Canyon.JPG"
                data-title="Hazy blue hour"
                data-description="Hazy blue hour in Grand Canyon. View from the South Rim."
                >
        </a>
        <a href="http://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/2909_vallon_moy_res.jpg/800px-2909_vallon_moy_res.jpg">
            <img
                src="http://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/2909_vallon_moy_res.jpg/100px-2909_vallon_moy_res.jpg"
                data-big="http://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/2909_vallon_moy_res.jpg/1280px-2909_vallon_moy_res.jpg"
                data-title="Haute Severaisse valley"
                data-description="View of Haute Severaisse valley and surrounding summits from the slopes of Les Vernets."
                >
        </a>
        <a href="http://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bohinjsko_jezero_2.jpg/800px-Bohinjsko_jezero_2.jpg">
            <img
                src="http://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bohinjsko_jezero_2.jpg/100px-Bohinjsko_jezero_2.jpg"
                data-big="http://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bohinjsko_jezero_2.jpg/1280px-Bohinjsko_jezero_2.jpg"
                data-title="Bohinj lake"
                data-description="Bohinj lake (Triglav National Park, Slovenia) in the morning."
                >
        </a>
        <a href="http://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Bowling_Balls_Beach_2_edit.jpg/800px-Bowling_Balls_Beach_2_edit.jpg">
            <img
                src="http://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Bowling_Balls_Beach_2_edit.jpg/100px-Bowling_Balls_Beach_2_edit.jpg"
                data-big="http://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Bowling_Balls_Beach_2_edit.jpg/1280px-Bowling_Balls_Beach_2_edit.jpg"
                data-title="Bowling Balls"
                data-description="Mendocino county, California, USA."
                >
        </a>
    </div>
        <div style="font-size: 14px; position: absolute; bottom: 0; padding: 10px">
            Designed by <a href="mailto:aliaksei_zhynhiarouski@epam.com">Aliaksei Zhynhiarouski</a> <br />
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

    $('#galleria').galleria({
        width: 800,
        height: 467
    });

    APP.comments = "";
    $.get("/route.php?cmd=fetch", function(json) {
        APP.comments = JSON.parse(json);
        APP.printComments(APP.comments);
    });


</script>

</body>
</html>
