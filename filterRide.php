<html>
<head>
  <style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<?php
  require_once('mysqli_connect.php');
  //Get url query from form submission
  $q = intval($_GET['q']);

  // $query = "SELECT rideid, destination, price, capacity, userid, origin, departDate, vehicle FROM rides";
  $query="SELECT * FROM rides WHERE userid = '".$q."'";
  $response = @mysqli_query($dbc, $query);
  
  if($response){

    echo '<table>

    <tr>
    <th><b>Origin</b></th>
    <th><b>Destination</b></th>
    <th><b>Price</b></th>
    <th><b>Capacity</b></th>
    
    <th><b>Departure Date</b></th>
    
    </tr>';
    // echo "First result from response ". mysql_result($response, 0); 
    while($row = mysqli_fetch_array($response)){
      echo '<tr>';
      echo '<td>' . $row['origin'] . '</td>';
      echo '<td>' . $row['destination'] . '</td>';
      echo '<td>' . $row['price'] . '</td>';
      echo '<td>' . $row['capacity'] . '</td>';
      echo '<td>' . $row['departDate'] . '</td>';
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
