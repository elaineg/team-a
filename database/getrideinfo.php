# Displays all the rides in the database 
<?php
  require_once('mysqli_connect.php');

  $query = "SELECT destination, price, capacity, ride_id_number FROM current_rides";

  $response = @mysqli_query($dbc, $query);

  if($response){

    echo '<table align="left"
    cellspacing="5" cellpadding="8">

    <tr><td align="left"><b>Destination</b></td>
    <td align="left"><b>Price</b></td>
    <td align="left"><b>Capacity</b></td>
    <td align="left"><b>Ride ID</b></td></tr>';

    while($row = mysqli_fetch_array($response)){
      echo '<tr><td align="left">' .
      $row['destination'] . '</td><td align="left">' .
      $row['price'] . '</td><td align="left">'.
      $row['capacity'] . '</td><td align="left">' .
      $row['ride_id_number'] . '</td><td align="left">';

      echo '</tr>';
    }

    echo '</table>';
  } else {
    echo "Issue with database query";
    echo mysqli_error($dbc);
  }

  mysqli_close($dbc);
?>
