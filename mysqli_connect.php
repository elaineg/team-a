
<?php
  #Opens a connection to the mySQL database
  
  DEFINE ('DB_USER', 'team_a'); # User name that you use to enter database 
  DEFINE ('DB_PASSWORD', 'qtma_qshare'); # Password used for the database
  DEFINE ('DB_HOST', 'qshare-mysql.cbdnvr3ldjvu.ca-central-1.rds.amazonaws.com'); # The server that the connection to mySQL is coming from
  DEFINE ('DB_NAME', 'qshare_database'); # The name of the database you want to use
  
  $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
  OR die('Can not connect ' . mysqli_connect_error());
 
?>
