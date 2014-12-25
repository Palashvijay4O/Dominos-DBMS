<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  </head>

  <body>
    <div class="container" >
      <form role="form" style="float:right;" action="insert-product.php" method="post">
        <div class="form-group">
        <h1> Add Product </h1>
          <table style="float:right;"><tr><td><label for="itemname">Item Name</label></td>
          <td><input type="text" class="form-control" id="itemname" name="itemname" placeholder="Enter Item Name" required></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="sellingprice">Selling Price:</label></td>
          <td><input type="text" class="form-control" id="sellingprice" name="sellingprice" placeholder="Enter Selling Price" required></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="costprice">Cost Price:</label></td>
          <td><input type="text" class="form-control" id="costprice" name="costprice" placeholder="Enter Cost Price" required></td></tr>
        </div>
        <tr><td><button type="submit" class="btn btn-default">Submit</button></td></tr>
        </table>
      </form>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
