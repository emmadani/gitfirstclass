<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="insert.php" method="POST" enctype="multipart/form-data">
	<h3>First Name:</h3>
	<input type="text" name="name">
<br>
<input type="file" name="image" onChange="readURL(this)" height="50">
<img id="proimg">
<br><br>
<input type="submit" name="subbtn" value="Submit">
</form>



<script >
	function readURL(input)
	{
		if(input.files && input.files[0])
		{
			var reader=new FileReader();
			reader.onload=function (e) 
			{
				$('#proimg')
				.attr('src',e.target.result)
				.width(250)
				.height(250)
				.css("visibility"."vsible");
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
</body>
</html>