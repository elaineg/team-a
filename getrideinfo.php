<html>
<body>
<?php
  require_once('mysqli_connect.php');

  $query = "SELECT rideid, destination, price, capacity, userid, origin, departDate, vehicle FROM rides";

  $response = @mysqli_query($dbc, $query);

  if($response){

    echo '<table align="left"
    cellspacing="5" cellpadding="8">

    <tr><td align="left"><b>Ride ID</b></td>
    <td align="left"><b>Destination</b></td>
    <td align="left"><b>Origin</b></td>
    <td align="left"><b>Price</b></td>
    <td align="left"><b>Capacity</b></td>
    <td align="left"><b>User ID</b></td>
    <td align="left"><b>Departure Date</b></td>
    <td align="left"><b>Vehicle</b></td></tr>';

    while($row = mysqli_fetch_array($response)){
      echo '<tr><td align="left">' .
      $row['rideid'] . '</td><td align="left">' .
      $row['destination'] . '</td><td align="left">'.
      $row['origin'] . '</td><td align="left">' .
      $row['price'] . '</td><td align="left">'.
      $row['capacity'] . '</td><td align="left">'.
      $row['userid'] . '</td><td align="left">'.
      $row['departDate'] . '</td><td align="left">'.
      $row['vehicle'] . '</td><td align="left">';

      echo '</tr>';
    }

    echo '</table>';
  } else {
    echo "Issue with database query";
    echo mysqli_error($dbc);
  }

  mysqli_close($dbc);
?>
</body>
</html>
