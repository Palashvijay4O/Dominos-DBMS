<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  </head>

  <body>
    <div class="container" >
      <form role="form" style="float:right;" action="insert-discount.php" method="post">
        <div class="form-group">
        <h1> Add Discount Amount </h1>
          <table style="float:right;"><tr><td><label for="amount">Amount: </label></td>
          <td><input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount"></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="discountamount">Discount Amount: </label></td>
          <td><input type="text" class="form-control" id="discountamount" name="discountamount" placeholder="Enter Discount Amount"></td></tr>
        </div>
        <tr><td><button type="submit" class="btn btn-default">Submit</button></td></tr>
        </table>
      </form>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
