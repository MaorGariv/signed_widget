<?php
	include 'config.php';
	echo \Cloudinary::api_sign_request($_GET["data"], Cloudinary::config_get("api_secret")); 
?>
