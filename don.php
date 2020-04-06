<?php
$host='localhost';
$dbusername='root';
$dbpassword='';
$dbname='pari';
$food = $_POST['foodJson'];
$medicines = $_POST['medsJson'];
$daily = $_POST['needsJson'];
$username = $_POST['username'];
$address = $_POST['useraddress'];
$mobile = $_POST['mobileno'];
 
$conn = mysqli_connect($host,$dbusername,$dbpassword, $dbname);

if($conn->connect_error)
{
 die('Connection Failed :'.$conn->connect_error);
}
else{
	$dateOfYear = date('Y/m/d');
	$dateOfYear = explode('/',$dateOfYear);
	$date = $dateOfYear[2];
	$month = $dateOfYear[1];
	$year = $dateOfYear[0];
	$finalDate = $date."".$month."".$year;
	$random = rand(100,999);
	$donationId = $finalDate."".$random;
	$stmt = $conn->prepare("INSERT INTO donations (donationId,username,mobileno,useraddress,food,medicines,dailyneeds) VALUES (?,?,?,?,?,?,?) ");
	$stmt->bind_param("sssssss",$donationId,$username,$mobile,$address,$food,$medicines,$daily);
	$stmt->execute();
	echo " Registration Succcess. Your Donation Id is ".$donationId;
	$stmt->close();
	$conn->close();
}
header( "refresh:5;url=index.html" );
?>