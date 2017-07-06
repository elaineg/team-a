# page that allows you to set up a ride
<html>
  <body>

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
      <td colspan ="2" align="center"><input type="submit" name="submit" value="submit" /></td>
    </tr>
  </div>
  </form>
  </body>
</html>
