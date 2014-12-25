<?php
	$orderid=$_POST['orderid'];
	$emailid=$_POST['email'];
	$connect=mysqli_connect("localhost","application","123456789","application");
	if ($connect==false)
	{
		echo "Error . Cannot Connect";

	}
	else
	{
		$sql="SELECT * FROM application.Tracking WHERE Order_id=$orderid";
		$result=$connect->query($sql);
		while($row=$result->fetch_assoc())
		{
			if(strcmp($row[Email_id],$emailid)==0)
			{
				//echo "matched";
				$sql2="SELECT * FROM application.Order WHERE Order_id=$orderid";
				$result2=$connect->query($sql2);
				while($row=$result2->fetch_assoc())
				{
					$time=date("H:i:s");
					//echo $time;
					$ordertime=$row[time];
					echo "Your order was taken at <b>" .$ordertime."</b>";
					echo "<br><br>"; 	
					echo "Your order is yet to be delivered. ";
					//$interval=$time->diff($ordertime);
					//echo $interval->format("H:i:s");
				}

			}
			else
			{
				echo "Order with these details not found . Please try again .";
			}
		}
	}




?>