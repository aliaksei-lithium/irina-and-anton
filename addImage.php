<!DOCTYPE html>
<html>
<head>
    <title>Irina and Anton</title>
    <link rel="stylesheet" href="/static/css/styles.css"/>

    <!-- Loading Bootstrap -->
    <link href="/static/FlatUI/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="/static/FlatUI/css/flat-ui.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="/static/FlatUI/js/html5shiv.js"></script>
    <![endif]-->

</head>
<body onload = "setFocus()">
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div style="padding: 100px 0; "><img style="margin: auto; display: block; height: 150px; width: 150px" src="/static/FlatUI/images/icons/svg/gift-box.svg" alt="Gift-Box"></div>
        </div>
        <div class="col-md-4">
            <h3>Add image to gallery</h3>

            <form id="image-form" action="route.php" method="post" >
                <input type="hidden" name="cmd" value="addImage">
                <div class="line form-group">
                    <label for="image-text">Image url:</label>
                    <textarea id="image-text" name="image-text" rows="4" maxlength="500"
                              class="form-control"></textarea>
                </div>
                <div class="line">
                    <button style="width: 25%" class="btn btn-lg btn-danger" onclick="gotoImages();  return false;">Cancel</button>
                    <button style="width: 70%" class="btn btn-lg btn-success" type="submit" onclick="submitImage(); return false;">Do it!</button>
                </div>
            </form>

        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>


<!-- Load JS here for greater good =============================-->
<script src="/static/FlatUI/js/jquery-1.8.3.min.js"></script>
<script src="/static/FlatUI/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/static/FlatUI/js/jquery.ui.touch-punch.min.js"></script>
<script src="/static/FlatUI/js/bootstrap.min.js"></script>
<script src="/static/FlatUI/js/jquery.placeholder.js"></script>
<script src="/static/js/main.js"></script>

</body>
</html>