<?php
require_once('./login/settings.php');
?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Trek Buddy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="bg-info">

<div class="container" >
	 <div class="row" >
	</div>
  <div class="row" >

  		<div class="col-sm-2">
  		</div>
  		<div class="col-sm-8 centered">
  				<a href="<?= 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>" ><img src="./images/signin_button.png"></a>
  		</div>
  		<div class="col-sm-2">
  		</div>

  	<div>

</div>

</body>
</html> 