<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  </head>

  <body>
    <div class="container" >
      <form role="form" style="float:right;" action="insert-store.php" method="post">
        <div class="form-group">
        <h1> Add Store </h1>
          <table style="float:right;"><tr><td><label for="storeid">Store Id</label></td>
          <td><input type="text" class="form-control" id="storeid" name="storeid" placeholder="Enter Store Id" required></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="storename">Store Name:</label></td>
          <td><input type="text" class="form-control" id="storename" name="storename" placeholder="Enter Store Name" required></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="phonenumber">Contact Number:</label></td>
          <td><input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter Phone Number" required></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="manager">Manager:</label></td>
          <td><input type="text" class="form-control" id="manager" name="manager" placeholder="Enter Manager Name" required></td></tr>
        </div>
        <tr><td><button type="submit" class="btn btn-default">Submit</button></td></tr>
        </table>
      </form>
    </div>

    <script src="..js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
