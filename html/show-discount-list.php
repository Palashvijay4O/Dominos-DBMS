<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  </head>

  <body>


  <?php
    $connect = mysqli_connect("localhost","application","123456789","application");
    $query = "SELECT * FROM Discounts WHERE Amount=$_GET[ids]";
    $result = mysqli_query($connect, $query);

   $result2 = mysqli_fetch_array($result);
?>
  
    <div class="container" >
      <h2> Show Discount </h2>
      <form role="form" action="update-discount.php?ids=<?php echo $result2[Amount];?>" method="post">
        <div class="form-group">
          <table style="float:right;"><tr><td><label for="amount">Total Amount: </label></td>
          <td><input type="text" class="form-control" id="amount" name="amount" value="<?php echo $result2[Amount];?>" placeholder="Enter amount"></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="discount">Discount Amount: </label></td>
          <td><input type="text" class="form-control" id="discount" name="discount" value="<?php echo $result2[Discount_amount];?>" placeholder="Enter Discount"></td></tr>
        </div>
        <tr><td><button type="submit" class="btn btn-default">Submit</button></td></tr>
        </table>
      </form>
    </div>
    
      <script src="..js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
  