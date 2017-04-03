<?php
	require 'cloudinary/Cloudinary.php';
	$config = array(
		"cloud_name" => "cloud_name",
		"api_key" => "api_key",
		"api_secret" => "api_secret"
	);
	\Cloudinary::config($config);
?>
