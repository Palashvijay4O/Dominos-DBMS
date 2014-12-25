<html>
<body>
<?php

$connect = mysqli_connect("localhost","application","123456789","application");
$fname = mysqli_real_escape_string($connect,$_POST["fname"]);
$lname = mysqli_real_escape_string($connect,$_POST["lname"]);
$email = mysqli_real_escape_string($connect,$_POST["email"]);
$street = mysqli_real_escape_string($connect,$_POST["street"]);
$city = mysqli_real_escape_string($connect,$_POST["city"]);
$pincode= mysqli_real_escape_string($connect,$_POST["pincode"]);
$state= mysqli_real_escape_string($connect,$_POST["state"]);
$contactnumber = mysqli_real_escape_string($connect,$_POST["contactnumber"]);

if ($connect==false) {
	die("Error . Cannot connet " . mysqli_connect_error());
}
else {
	$command = "INSERT INTO application.Customer (First_name, Last_name, Email, Street, City, Pincode, State, Phone) VALUES ('$fname', '$lname', '$email', '$street', '$city', '$pincode', '$state', '$contactnumber')";
	if (mysqli_query($connect,$command)){
		echo "successfully inserted" ; 

	}
//	$command= "INSERT INTO application.Order (Email) VALUES ('$email')";
//	mysqli_query($connect,$command);
	
	header('Location: order.php?email='.$email);
}
mysqli_close($connect)
?>
</body>
</html>
