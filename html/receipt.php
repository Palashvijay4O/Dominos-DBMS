<?php
	$time=$_GET[id];
	$connect=mysqli_connect("localhost","application","123456789","application");
	if ($connect==false)
	{
		echo "Error . Authentication required";
	}

	else
	{
		$sql="SELECT * FROM application.Order WHERE time='$time'";
		$result=$connect->query($sql);
		while($row=$result->fetch_assoc())
		{	
			echo "<h1><center>Order Details:</center></h1>";
			echo "You need to pay<b> Rs. " .$row['Amount']." /- </b> . Please note your order id is <b> ". $row[Order_id]."</b> so that you can track your order.\n";
			echo "Your Mode of Payment is <b> ".$row[Mode]."</b>";
			$sql2="INSERT INTO application.Tracking (Order_id, Email_id,Payment) VALUES ('$row[Order_id]','$row[Email]','$row[Mode]')";
			//echo $sql2;
			$result2=$connect->query($sql2);

		}
	}
?>