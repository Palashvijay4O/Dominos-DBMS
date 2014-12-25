<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  </head>

  <body>

  <?php
    //echo $_GET['ids'];
    $connect = mysqli_connect("localhost","application","123456789","application");
    $query = "SELECT * FROM application.store WHERE Store_id=$_GET[ids]";
    //echo $query;
    $result = $connect->query($query);
    //echo $result;
    $result2 = mysqli_fetch_array($result);
    //echo $result2;
?>
    <div class="container" >
      <h2 style="float:left;"> Update Store </h2>
      <form role="form" method="post" action="update-store.php?ids=<?php echo $_GET[ids];?> " >
        <div class="form-group">
          <table "><tr><td><label for="storeid">Store Id:</label></td>
          <td><input type="text" class="form-control" id="storeid" name="storeid" value="<?php echo $result2[Store_id];?>" placeholder="Enter Id"></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="storename">Store Name:</label></td>
          <td><input type="text" class="form-control" id="storename" name="storename" value="<?php echo $result2[Store_name];?>" placeholder="Enter Store Name"></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="phonenumber">Contact Number:</label></td>
          <td><input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo $result2[Phone_number];?>" placeholder="Enter Number"></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="manager">Manager:</label></td>
          <td><input type="text" class="form-control" id="manager" name="manager" value="<?php echo $result2[Store_manager];?>" placeholder="Enter Number"></td></tr>
        </div>
        <tr><td><button type="submit" class="btn btn-default">Submit</button></td></tr>
        </table>
      </form>
    </div>
    
   <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
  