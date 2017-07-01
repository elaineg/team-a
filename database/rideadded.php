# page displayed after submit button ispressed on rideadd page
<html>
<head>
  <title>Add Ride</title>
</head>
<body>
  <?php
    if(isset($_POST['submit'])){
      $data_missing = array();

      if(empty($_POST['ridedestination'])){
        $data_missing[] = 'Destination';

      } else {
        $dest = trim($_POST['ridedestination']);
      }

      if(empty($_POST['rideprice'])){
        $data_missing[] = 'Price';

      } else {
        $price = trim($_POST['rideprice']);
      }

      if(empty($_POST['ridecapacity'])){
        $data_missing[] = 'Capacity';

      } else {
        $cap = trim($_POST['ridecapacity']);
      }

      if(empty($data_missing)){
        require_once('mysqli_connect.php');

        $query = "INSERT INTO current_rides(destination, price, capacity, ride_id_number) VALUES(?,?,?,NULL)";
        $stmt = mysqli_prepare($dbc,$query);

        mysqli_stmt_bind_param($stmt, "sid", $dest, $price, $cap);

        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);

        if($affected_rows == 1){
          echo 'ride entred';

          mysqli_stmt_close($stmt);
          mysqli_close($dbc);
        } else {
          echo 'error <br />';
          echo mysqli_error();

          mysqli_stmt_close($stmt);
          mysqli_close($dbc);
        }
      } else {
        echo 'You need to add <br />';

        foreach($data_missing as $missing){
          echo "$missing<br />";
        }
      }
    }
?>

<form action="rideadded.php" method="post">

<table border="0">

<title>Create a ride</title>
<div>
  <h1>Let's set-up your ride</h1>
  <tr>
    <td>Destination</td>
    <td align="center"><input type="text" name="ridedestination" size="30" /></td>
  </tr>
  <tr>
    <td>Price</td>
    <td align="center"><input type="text" name="rideprice" size="30" /></td>
  </tr>
  <tr>
    <td>How many people can you fit?</td>
    <td align="center"><input type="text" name="ridecapacity" size="30" /></td>
  </tr>
</div>
<div>
  <tr>
    <td colspan ="2" align="center"><input type="submit" name ="submit" value="submit" /></td>
  </tr>
</div>
</form>
</body>
</html>
