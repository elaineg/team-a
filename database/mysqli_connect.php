# Opens a connection to the mySQL database
<?php
  DEFINE ('DB_USER', 'ridecreate'); # User name that you use to enter database 
  DEFINE ('DB_PASSWORD', 'password'); # Password used for the database
  DEFINE ('DB_HOST', 'localhost'); # The server that the connection to mySQL is coming from
  DEFINE ('DB_NAME', 'rides'); # The name of the database you want to use

  $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
  OR die('Can not connect ' . mysqli_connect_error());

?>
