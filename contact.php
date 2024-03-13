<!<!DOCTYPE html>
<ktml>
	<head>
	</head>
<body>
<?php
	$con=mysqli_connect('localhost','root','admin','dell_laptop');

	if($con === false){
		die("ERROR: could not connect. "
		. mysqli_connect_error());
	}
	
	/*echo $_REQUEST['Name'];
	//echo $Name;

	echo $_POST['Name'];
	echo $Name;*/

	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Message = $_POST['Message'];
	
	$sql = "INSERT INTO customer_details (Name, Email, Message) VALUES('$Name','$Email','$Message')";
	
	$rs = mysqli_query($con,$sql);
	if($rs)
	{
		echo "<script>alert('Contact message succesfully saved.');
		document.location='index.html'</script>";
	  	//echo"<h1>Contact Records Inserted!</h1>";
	}


?>
</body>
</html>
   