<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  </head>

  <body>


  <?php
    $connect = mysqli_connect("localhost","application","123456789","application");
    $query = "SELECT * FROM Products WHERE Selling_price=$_GET[ids]";
    $result = mysqli_query($connect, $query);

    $result2 = mysqli_fetch_array($result);
?>
  
    <div class="container" >
      <h2 style="float:left;"> Show Product </h2>
      <form role="form" action="update-product.php?ids=<?php echo $result2[Selling_price];?>" method="post">
        <div class="form-group">
          <table style="float:right;"><tr><td><label for="itemname">Item Name:</label></td>
          <td><input type="text" class="form-control" id="itemname" name="itemname" value="<?php echo $result2[Item_name];?>" placeholder="Enter Name"></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="sellingprice">Selling Price:</label></td>
          <td><input type="test" class="form-control" id="sellingprice" name="sellingprice" value="<?php echo $result2[Selling_price];?>" placeholder="Enter Selling Price"></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="costprice">Cost Name:</label></td>
          <td><input type="text" class="form-control" id="costprice" name="costprice" value="<?php echo $result2[Cost_price];?>" placeholder="Enter Name"></td></tr>
        </div>
        <tr><td><button type="submit" class="btn btn-default">Submit</button></td></tr>
        </table>
      </form>
    </div>
    
      <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
  