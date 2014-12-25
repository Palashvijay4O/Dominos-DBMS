<html>
<body>
<?php

$connect = mysqli_connect("localhost","application","123456789","application");
$itemname = mysqli_real_escape_string($connect,$_POST["itemname"]);
$sp = mysqli_real_escape_string($connect,$_POST["sellingprice"]);
$cp = mysqli_real_escape_string($connect,$_POST["costprice"]);

if ($connect==false) {
  die("Error . Cannot connet " . mysqli_connect_error());
}
else {
  $command = "INSERT INTO application.Products (Item_name, Selling_price, Cost_price) VALUES ('$itemname', '$sp', '$cp')";
  $result=$connect->query($command);
  header('Location: admin.php?name=application&pwd=123456789');

}
mysqli_close($connect)
?>
</body>
</html>