<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('mysqli_connect.php');

$query = "SELECT rideid, destination, price, capacity, userid, origin, departDate, vehicle FROM rides";

$result = @mysqli_query($dbc, $query);
$myArray = array();
if($result){

	while($rs = mysqli_fetch_array($result)) {
		$myArray[] = array(
			'Origin' => $rs["origin"],
			'Destination' => $rs["origin"],
			'Price' => $rs["price"],
			'Capacity' => $rs["capacity"],
			'ID' => $rs["userid"],
			'Date' => $rs["departDate"],
			'ProfilePicture' => 'http://graph.facebook.com/'. $rs["userid"] . '/picture?type=small'
		);
	}
	echo json_encode(["records" => $myArray]);


	//$outp ='{"records":['.$outp.']}';

}else{
	echo "Issue with database query";
    echo mysqli_error($dbc);
}
mysqli_close($dbc);

