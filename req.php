<?php
 $host='localhost';
 $dbusername='root';
 $dbpassword='';
 $dbname='pari';
$latlon = $_POST['latlon'];
$location = $_POST['location'];
$disaster = $_POST['disaster'];
$food = $_POST['foodStr'];
$medicines = $_POST['medicinesStr'];
$daily = $_POST['dailyNeedsStr'];
$phyAssistance = $_POST['assistanceInt'];
 
$conn = mysqli_connect($host,$dbusername,$dbpassword, $dbname);

if($conn->connect_error)
{
 die('Connection Failed :'.$conn->connect_error);
}
else{
	$stmt = $conn->prepare("INSERT INTO requests (loc,latlon,disaster,food,medicines,dailyneeds,physicalassistance) VALUES (?,?,?,?,?,?,?);");
	$stmt->bind_param("ssssssi",$location,$latlon,$disaster,$food,$medicines,$daily,$phyAssistance);
	$stmt->execute();
	echo " Registration Succcess. ID=".$conn->insert_id;
	$stmt->close();
	$conn->close();
}
header( "refresh:5;url=index.html" );


?>