<html>
<body>
<?php

$connect = mysqli_connect("localhost","application","123456789","application");
$amount = mysqli_real_escape_string($connect,$_POST["mode"]);
//$discountamount = mysqli_real_escape_string($connect,$_POST["discountamount"]);

if ($connect==false) {
  die("Error . Cannot connect " . mysqli_connect_error());
}
else {
  $command = "INSERT INTO application.PaymentModes (Mode_of_payment) VALUES ('$amount')";
  $result=$connect->query($command);
  header('Location: admin.php?name=application&pwd=123456789');

}
mysqli_close($connect)
?>
</body>
</html>