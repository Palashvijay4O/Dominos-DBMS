<?php
   $email= $_GET["email"];
   $connect=mysqli_connect("localhost","application","123456789","application");
   if(connect==false)
   {
    echo "Error . TimeOut";
   }
   else
   {

    
        $sql = "SELECT * from Products";
        $result=$connect->query($sql);
        $result2=$connect->query($sql);
        $pass =sizeof($result->fetch_array())/2 ;
        //echo $pass;
        echo "<form method= \"post\" action=\"payment.php?email=". $email ."\">";
        echo "<center><table style:\"padding=10px;\"><tr><th>Product</th><th>Cost</th><th>Quantity</th></tr>";
        $count =1;
        while($row=$result2->fetch_assoc())
        {
          echo "<tr><td> $row[Item_name] </td><td> $row[Selling_price] </td><td><input type =\"number\" min=\"1\" max=\"15\" name=".$count." id=".$count."></td></tr>" ;
          $count=$count+1;

          //echo $count;
        }
        echo "<br><br>";
        echo "<tr><td>Payment mode:</td><td>";
        
          $sql="SELECT * FROM PaymentModes";
          $request=$connect->query($sql);
          echo "<select name=\"mode\">";
          
          while($row = $request->fetch_assoc())
           {  
              
              echo "<option >".$row['Mode_of_payment'] ." </option>";
           
          }
             echo "</select>";
             echo "<tr><td>Select Store: </td><td>";
        
          $sql="SELECT * FROM store";
          $request=$connect->query($sql);
          echo "<select name=\"store\">";
          
          while($row = $request->fetch_assoc())
           {  
              
              echo "<option >".$row['Store_name'] ." </option>";
           
          }
             echo "</select>";
             echo "</td></tr></table>";
             echo "<br><br><br>";
        echo "<button type=\"submit\" name=\"button\">Order</button>";
        echo "</center>";
        echo "</form>";
    
   }
?>