<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  </head>

  <body>
    <div class="container" >
      <form role="form" style="float:right;" action="insert-mode.php" method="post">
        <div class="form-group">
        <h1> Add Mode Of Payment </h1>
          <table style="float:right;"><tr><td><label for="mode">Mode: </label></td>
          <td><input type="text" class="form-control" id="mode" name="mode" placeholder="Enter Mode"></td></tr>
        </div>
        <tr><td><button type="submit" class="btn btn-default">Submit</button></td></tr>
        </table>
      </form>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/js/bootstrap.min.js"></script>
  </body>
</html>
