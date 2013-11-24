<!DOCTYPE html>
<html>
<head>
    <title>Irina and Anton gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">

    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

    <!-- Loading Bootstrap -->
    <link href="/static/FlatUI/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="/static/FlatUI/css/flat-ui.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/static/twelve/galleria.twelve.css">

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

        #galleria {
            margin: 0 auto;
            width: 800px;
            height: 467px;
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
        <div class="col-md-2">
            <div class="buttons-group">
                <button onclick="gotoIndex();" class="btn btn-lg btn-info">Back</button>
                <button onclick="gotoImageForm();" class="btn btn-lg btn-primary">Add image</button>
            </div>
        </div>
        <div class="col-md-8">
            <h2 style="text-align: center;">Gallery</h2>

            <div id="galleria">
                <?php
                require_once("route.php");
                $images = fetchAllImages();

                foreach ($images as $image) {
                    echo '<a href=' . $image["image_url"] . '><img src=' . $image["image_url"] . '></a>';
                }
                ?>

            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<script src="/static/js/galleria-1.3.3.min.js"></script>
<script src="/static/twelve/galleria.twelve.min.js"></script>
<script src="/static/js/main.js"></script>

<script>
    $('#galleria').galleria({
        width: 800,
        height: 467
    });
</script>
</body>
</html>