<html>
<head>
</head>
<body>
<?php
$connect= mysqli_connect("localhost","application","123456789","application");
if($connect==false) {
	echo "You cannot delete this . Please login with admin credentials.";
}
else {
	$deleteIt=$_GET["id"];
	$sql = "DELETE FROM store WHERE Store_id=$deleteIt";
	$result=$connect->query($sql);
	header('Location: admin.php?name=application&pwd=123456789');
}

mysqli_close($connect);
?>
</body>
</html>