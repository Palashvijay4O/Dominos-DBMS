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
	echo $_POST[Amount];
//	$updateIt=$_GET['ids'];
	$sql = "UPDATE Discounts SET Amount=$_POST[amount] ,Discount_amount=$_POST[discount] WHERE Amount=$updateIt";
	//echo $sql; 	
	$result=$connect->query($sql);

	//echo $result;
	header('Location: admin.php?name=application&pwd=123456789');
}

mysqli_close($connect);
?>
</body>
</html>