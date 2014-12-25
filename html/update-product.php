<html>
<head>
</head>
<body>
<?php
$updateIt=$_GET[ids];
//echo $updateIt;
$connect= mysqli_connect("localhost","application","123456789","application");
$itemname=mysqli_real_escape_string($connect,$_POST["itemname"]);
if($connect==false) {
	echo "You cannot delete this . Please login with admin credentials.";
}
else {
	$updateIt=$_GET[ids];
	$sql = "UPDATE Products SET Item_name= '$_POST[itemname]'  , Selling_price=$_POST[sellingprice],Cost_price=$_POST[costprice] WHERE Selling_price=$updateIt";
	//echo $sql; 	
	$result=$connect->query($sql);

	//echo $result;
	header('Location: admin.php?name=application&pwd=123456789');
}

mysqli_close($connect);
?>
</body>
</html>