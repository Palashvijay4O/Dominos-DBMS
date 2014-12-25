<html>
<head>
</head>
<body>
<?php
$updateIt=$_GET['ids'];
//echo $updateIt;
$connect= mysqli_connect("localhost","application","123456789","application");
if($connect==false) {
	echo "You cannot delete this . Please login with admin credentials.";
}
else {
	echo $_POST[storeid];
//	$updateIt=$_GET['ids'];
	$sql = "UPDATE store SET Store_id=$_POST[storeid], Store_name='$_POST[storename]' ,Phone_number=$_POST[phonenumber] ,Store_manager='$_POST[manager]' WHERE Store_id=$updateIt";
	//echo $sql; 	
	$result=$connect->query($sql);

	echo $result;
	header('Location: admin.php?name=application&pwd=123456789');
}

mysqli_close($connect);
?>
</body>
</html>