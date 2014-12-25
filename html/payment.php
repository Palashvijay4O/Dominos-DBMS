<?php


	$i=1;
	$email=$_GET["email"];
	$connect=mysqli_connect("localhost","application","123456789","application");
	$sql="SELECT * from Products";
	$result = $connect->query($sql);
	
	$amount_earned=0;
	$amount_spent=0;
	$profit=0;
	while ($row=$result->fetch_assoc())
	{
		$amount_earned = $amount_earned+(($row[Selling_price])*($_POST[(string)$i]));
		$amount_spent = $amount_spent+(($row[Cost_price])*($_POST[(string)$i]));
		$i=$i+1;

	
	}
	$profit= $amount_earned - $amount_spent;
	//echo gettype($profit);
	$sql="SELECT * FROM Dominos";
	$result2=$connect->query($sql);
	while($row=$result2->fetch_assoc())
	{		
		$amount_earned2=$amount_earned+$row[Total_sale];
		$profit=$profit+$row[Profit];
	
	}
	$sql2 ="UPDATE application.Dominos SET Total_sale=$amount_earned2 , Profit=$profit";
	//echo $sql2;
	$result=$connect->query($sql2);
	//echo $result;
	//echo gettype($amount_spent);
	//echo "$amount_earned";
	//$mode=$_POST["mode"];
	$date = date('Y-m-d');
	$time=date("H:i:s");
	$mode = mysqli_real_escape_string($connect,$_POST[mode]);
	$sql3 = "INSERT INTO application.Order (Email , `date`,Amount,time, Mode) VALUES ('$email','$date','$amount_earned', '$time','$mode')"; 
	//echo $sql3;
	$result=$connect->query($sql3);
	header('Location: receipt.php?id='.$time);
	?>