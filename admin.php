<?php
$adminid = $_POST['adminid'];
$password = $_POST['password'];

$id = 'admin2019';
$pass = 'pariadmin2019';

if (($adminid === $id) &&($password === $pass)) {
    header( "refresh:2;url=admindashboard.php" );
}else{
    echo "<h1 style=\"text-align:center;\">Wrong Credentials</h1>";
    header( "refresh:2;url=admin.php" );
}

?>