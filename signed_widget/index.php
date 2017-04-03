<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Signed widget</title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://widget.cloudinary.com/global/all.js"></script>
	<script type="text/javascript">
	  var generateSignature = function(callback, params_to_sign){
	    $.ajax({
	      url     : "my_generate_signature.php",
	      type    : "GET",
	      dataType: "text",
	      data    : { data: params_to_sign},
	      complete: function() {console.log("complete")},
	      success : function(signature, textStatus, xhr) { callback(signature); },
	      error   : function(xhr, status, error) { console.log(xhr, status, error); }
	    });
	  }
	</script>
</head>
<body>

	<div id="upload_widget_opener"></div>
	<script type="text/javascript">  
		$('#upload_widget_opener').cloudinary_upload_widget(
		{ cloud_name: "<?php echo Cloudinary::config_get("cloud_name") ?>", api_key: <?php echo Cloudinary::config_get("api_key") ?>,
	      cropping: 'server', upload_signature: generateSignature, thumbnail_transformation: {transformation: [{crop: "crop", gravity: "custom"}, { width: 90, height: 60, crop: 'limit' }]}},
		function(error, result) { console.log(error, result) });
	</script>

</body>
</html>
