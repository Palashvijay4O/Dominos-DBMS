<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script>
    table {
      padding:15px;

    }
    </script>


  </head>

  <body>
  <h1><center>Dominos</center></h1>

    <div class="container" >
      <h2 style="float:right;"> Sign in </h2>
      <form role="form"  method="get" action="admin.php">
        <div class="form-group">
          <table style="float:right;"><tr><td><label for="name">Name:</label></td>
          <td><input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="pwd">Password:</label></td>
          <td><input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" ></td></tr>
        </div>
        <div class="checkbox">
          <tr><td><label><input type="checkbox"> Remember me</label></td></tr>
        </div>
        <tr><td><button type="submit" class="btn btn-default">Submit</button></td></tr>
        </table>
      </form>
    </div>
    <br><br><br><br><br><br>  
    <h2>Customer Details Here</h2>  
    <div class="container">
      
      <form role="form" action="insert.php" method="post" >
        <div class="form-group">
          <table ><tr><td><label for="fname">First Name:</label></td>
          <td><input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" required></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="lname">Last Name:</label></td>
          <td><input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" required></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="email">Email:</label></td>
          <td><input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="street">Street:</label></td>
          <td><input type="text" class="form-control" id="street" name="street" placeholder="Enter Street" required></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="city">City:</label></td>
          <td><input type="text" class="form-control" id="city" name="city" placeholder="Enter City" required></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="pincode">Pincode:</label></td>
          <td><input type =\"number\" maxlength="6" size="6" min="111111"  class="form-control" id="pincode" name="pincode" placeholder="Enter Pincode" required></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="state">State:</label></td>
          <td><input type="text" class="form-control" id="state" name="state" placeholder="Enter State" required></td></tr>
        </div>
        <div class="form-group">
              
             <tr><td><label for="contactnumber">Phone Number:</label></td>
             <td><input type =\"number\" maxlength="10" size="10" min="6666666666" class="form-control" id="contactnumber" name="contactnumber" placeholder="Enter Street" required></td></tr>
        </div>
        
        <div class="form-group">
        <tr><td><button type="submit" class="btn btn-default">Submit</button></td></tr>
        </div>
      </table>
      </form>
    </div>
    

    <div class="container" >
      <h2 style="float:right;"> Track Your Order</h2>
      <form role="form" action="track.php" method="post">
        <div class="form-group">
          <table style="float:right;"><tr><td><label for="orderid">Order Id: </label></td>
          <td><input type="text" class="form-control" id="orderid" name="orderid" placeholder="Enter Order Id" required></td></tr>
        </div>
        <div class="form-group">
          <tr><td><label for="email">Email: </label></td>
          <td><input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required></td></tr>
        </div>
        <div class="form-group">
        <tr><td><button type="submit" class="btn btn-default">Track</button></td></tr>
        </div>
         </table>
      </form>
    </div>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    

  </body>
</html>
