<html>
<body>
<?php

$connect = mysqli_connect("localhost","application","123456789","application");
$amount = mysqli_real_escape_string($connect,$_POST["amount"]);
$discountamount = mysqli_real_escape_string($connect,$_POST["discountamount"]);

if ($connect==false) {
  die("Error . Cannot connet " . mysqli_connect_error());
}
else {
  $command = "INSERT INTO application.Discounts (Amount , Discount_amount) VALUES ('$amount', '$discountamount')";
  $result=$connect->query($command);
  header('Location: admin.php?name=application&pwd=123456789');

}
mysqli_close($connect)
?>
</body>
</html>