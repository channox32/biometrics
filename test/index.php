<html>
<head>
	<title></title>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery.form.js"></script>
</head>
<body>
	<form  method="post" enctype="multipart/form-data" action='file.php'>
	Upload your image <input type="file" name="imagefile" />
	<input type="submit" value="Submit" name="submitbtn" id="submitbtn">
	</form>
	<!-- The uploaded image will display here -->
	<div id='viewimage'></div>


	<script type="text/javascript" >
	$(document).ready(function() {
	$('#submitbtn').click(function() {
	$("#viewimage").html('');
	$("#viewimage").html('<img src="../img/ico.png" />');
	$(".uploadform").ajaxForm({
	target: '#viewimage'
	}).submit();
	});
	});
	</script>
</body>

</html>