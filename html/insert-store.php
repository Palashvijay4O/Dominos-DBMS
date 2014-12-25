<html>
<body>
<?php

$connect = mysqli_connect("localhost","application","123456789","application");
$storeid = mysqli_real_escape_string($connect,$_POST["storeid"]);
$storename = mysqli_real_escape_string($connect,$_POST["storename"]);
$phonenumber = mysqli_real_escape_string($connect,$_POST["phonenumber"]);
$manager = mysqli_real_escape_string($connect,$_POST["manager"]);

if ($connect==false) {
  die("Error . Cannot connet " . mysqli_connect_error());
}
else {
  $command = "INSERT INTO application.store (Store_id , Store_name, Phone_number,Store_manager) VALUES ('$storeid', '$storename', '$phonenumber','$manager')";
  $result=$connect->query($command);
  header('Location: admin.php?name=application&pwd=123456789');

}
mysqli_close($connect)
?>
</body>
</html>