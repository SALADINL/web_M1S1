<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Facebook</title>
		<link rel="icon" type="image/png" href="https://facebookbrand.com/wp-content/themes/fb-branding/prj-fb-branding/assets/images/fb-art.png">
		<link rel="stylesheet" type="text/css" href="lib/core/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id="view">
			<div class="container">
				<?php addView("headband"); ?>
				<div id="notif" class="row center"><?=$context->notif?></div>
				<div class="row">
					<div class="col-sm-3">
						<?php include($template_view); ?>
						<br>
						<div class="visible-md visible-lg"><?php addView("chat"); ?></div>
					</div>
					<div class="col-sm-6">
						<?php addView("sendMessage"); ?>
						<br>
						<?php addView("showMessage"); ?>
						<br>
						<?php addView("pagination");?>
					</div>
					<div class="col-sm-3 hidden-xs">
						<?php addView("displayFriendList"); ?>
					</div>
				</div>
				<br>
				<footer>
					<div class="row">
						<div class="footer col-xs-12">
							<span>&copy;Mathieu Le Veve et Nicolas Duret (vrai facebook)</span>
						</div>
					</div>
				</footer>
			</div>
		</div>
		
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
		<script type="text/javascript" src="lib/core/vendor/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
