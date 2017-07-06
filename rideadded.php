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

      if(empty($_POST['origin'])){
        $data_missing[] = 'Origin';
      } else {
        $org = trim($_POST['origin']);
      }

      if(empty($data_missing)){
        echo 'No Data Missing';
        require_once('mysqli_connect.php');

        $query = "INSERT INTO rides(destination, price, capacity,origin) VALUES(?,?,?,?)";
        $stmt = mysqli_prepare($dbc,$query);

        mysqli_stmt_bind_param($stmt, "sdis", $dest, $price, $cap,$org);

        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);

        if($affected_rows == 1){
          echo ' Ride Entered';

          mysqli_stmt_close($stmt);
          mysqli_close($dbc);
        } else {
          echo "Affected Rows: ".$affected_rows."</br>";
          echo 'Error Found: <br />';
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

<script>
  setTimeout( redirectProfile, 5000 );
  function redirectProfile() {
  window.top.location = "http://qshare.ca/profile.html#post";
  }
</script>
</body>
</html>
