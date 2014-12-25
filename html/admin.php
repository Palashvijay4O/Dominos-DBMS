<html>
<title>
Admin Page
</title>
<head>
<style type="text/css">

table ,th, td {
	border: 1px solid green;
	padding:10px;
	margin-left:25px;
	
}
th {
	background: wheat;
	border-radius: 15%;
}
td {
	font-weight: bold;
	background: #FFF06D;
	border-radius: 25%;
}
</style>
</head>
<body>
<?php

$name=$_GET["name"];
$password=$_GET["pwd"];
$connect= mysqli_connect("localhost",$name,$password,"application"); 

if ($connect==false){
	echo "Go back" ;

}
else
{
	echo "Welcome Admin";
	echo "<br><br><br><br>";
	$sql="SELECT * FROM `Products`";
	$result=$connect->query($sql);
	if ($result->num_rows > 0)
	{
		echo "<table><tr><th>Item Name</th><th>Selling Price</th><th>Cost Price</th><th>Operation 1</th><th>Operation 2</th></tr>";
		while($row = $result->fetch_assoc())
			echo "<tr><td>" . $row["Item_name"] . "</td><td>" . $row["Selling_price"] . "</td><td>" .$row["Cost_price"]. "</td><td><a href=./delete-product.php?ids=". $row["Selling_price"]. "> Delete</a></td><td><a href=./show-product-list.php?ids=". $row["Selling_price"]. ">Update</a></td></tr>" ;
		echo "</table><br><br>";
		echo "<button><h3><a href=./insert-product-form.php >Add Item</a></h3></button>";

	}
	echo "<br><br><br><br>";
	$sqli="SELECT * from store";
	$resulti=$connect->query($sqli);
	if ($resulti->num_rows > 0)
	{
		echo "<table><tr><th>Store ID</th><th>Store Name</th><th>Phone Number</th><th>Manager Name</th><th>Operation 1</th><th>Operation 2</th></tr>";
		while($row = $resulti->fetch_assoc())
			echo "<tr><td>" . $row["Store_id"] . "</td><td>" . $row["Store_name"] . "</td><td>" .$row["Phone_number"]. "</td><td>" . $row["Store_manager"]. "</td><td><a href=./delete-store.php?id=". $row["Store_id"]. " >Delete</a></td><td><a href=./show-store-list.php?ids=". $row["Store_id"]. ">Update</a></td></tr>" ;
		echo "</table><br><br>";
		echo "<button><h3><a href=./insert-store-form.php >Add Store</a></h3></button>";
	}
	echo "<br><br><br><br>";
	$sqli="SELECT * from Discounts";
	$resulti=$connect->query($sqli);
	if ($resulti->num_rows > 0)
	{
		echo "<table><tr><th>Amount</th><th>Discount_amount</th><th>Operation 1</th><th>Operation 2</th></tr>";
		while($row = $resulti->fetch_assoc())
			echo "<tr><td>" . $row["Amount"] . "</td><td>" . $row["Discount_amount"] . "</td><td><a href=./delete-discount.php?id=". $row["Amount"]. " >Delete</a></td><td><a href=./show-discount-list.php?ids=". $row["Amount"]. ">Update</a></td></tr>" ;
		echo "</table><br><br>";
		echo "<button><h3><a href=./insert-discount-form.php >Add Discount</a></h3></button>";
	}
	echo "<br><br><br><br>";
	$sql="SELECT * FROM PaymentModes";
	$result=$connect->query($sql);
	if ($result->num_rows > 0)
	{
		echo "<table><tr><th>Modes</th><th>Operation 1</th></tr>";
		while($row = $result->fetch_assoc())
		//	$pass=mysqli_real_escape_string($connect,$row["Mode_of_payment"]);
			echo "<tr><td>" . $row["Mode_of_payment"] . "</td><td><a href=./delete-mode.php?ids=" . urlencode($row['Mode_of_payment']) ." >Delete</a></td></tr>" ;
		
		echo "</table><br><br>";
		echo "<button><h3><a href=./insert-mode-form.php >Add Mode</a></h3></button>";


	}
	$sql="SELECT * FROM Dominos";
	$result=$connect->query($sql);
	if ($result->num_rows > 0)
	{
		echo "<table><tr><th>Total Sale</th><th>Profit</th></tr>";
		while($row = $result->fetch_assoc())
		//	$pass=mysqli_real_escape_string($connect,$row["Mode_of_payment"]);
			echo "<tr><td>" . $row["Total_sale"] . "</td><td>" . $row["Profit"] . "</td></tr>" ;
		
		echo "</table><br><br>";
	}

}

mysqli_close($connect);
?></body></html>