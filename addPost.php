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
	
	<script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"></script>
	<script>
		tinymce.init({
			mode: "exact",
			selector: '#post-text',
			forced_root_block : "",
			plugins: [
				"advlist autolink lists link image charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
		});

	</script>
</head>
<body onload = "setFocus()">
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div style="padding: 0; "><img style="margin: 0; display: block; height: 150px; width: 150px" src="/static/FlatUI/images/icons/svg/gift-box.svg" alt="Gift-Box"></div>
        </div>
        <div class="col-md-6">
            <h3>Put your message</h3>

            <form id="post-form" action="route.php" method="post" >
                <input type="hidden" name="cmd" value="addPost">
                <div class="line form-group">
                    <label for="post-text">Post:</label>
                    <textarea id="post-text" name="post-text" rows="15" maxlength="500"
                              class="form-control"></textarea>
                </div>
                <div class="line">
                    <button style="width: 28%" class="btn btn-lg btn-danger" onclick="gotoBlog();  return false;">Cancel</button>
                    <button style="width: 70%" class="btn btn-lg btn-success" type="submit" onclick="submitPost(); return false;">Do it!</button>
                </div>
            </form>

        </div>
        <div class="col-md-6">
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