<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pari</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/status.css" />
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="icon" href="./assets/icon.ico" type="image/x-icon" />
</head>

<body>
    <ul class="topnav" id="navbar">
        <h5 href="#" style="font-family:samarkhan; font-weight: 400; font-size: 50px;">Pari</h5>
        <li style="margin-right: 30px;"><a href="./index.html">Logout</a></li>
        <li><a>Contact Us</a></li>
        <li><a href="./index.html#about">About Us</a></li>
    </ul>

    <div class="container">
        <div style="width: 50%;margin:auto;text-align: center;">
            <button class="button" style="width:100px; border-radius: 10px; margin-top: 100px;margin-right: 50px;" onclick="toggle(1)">Donations</button>
            <button class="button" style="width:100px; border-radius: 10px; margin-top: 100px;margin-left: 50px;" onclick="toggle(2)">Requests</button>
        </div>
        <div style="width: 100%">
            <div style="position: absolute;display: block;width:100%;" id="donations">
                <h2 style="text-align:center;margin-top:50px;">Donations</h1>
                <div style="width:90%;margin:auto;margin-top:20px;">
                    <table border='1' align="center" style="background-color: white;text-align:center;">
                        <tr style="background-color: tomato;color:white;">
                            <th>Donation Id</th>
                            <th>Username</th>
                            <th>Mobile No</th>
                            <th>Address</th>
                            <th>Food</th>
                            <th>Medicines</th>
                            <th>Daily Needs</th>
                        </tr>
                        <?php
                            $host='localhost';
                            $dbusername='root';
                            $dbpassword='';
                            $dbname='pari';
                            $conn = mysqli_connect($host,$dbusername,$dbpassword, $dbname);
                            if($conn->connect_error)
                            {
                                die('Connection Failed :'.$conn->connect_error);
                            }
                            else
                            {
                                $query = "SELECT * from donations";
                                $result = mysqli_query($conn,$query);
                                while ($res = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>".$res['donationId']."</td>";
                                    echo "<td>".$res['username']."</td>";
                                    echo "<td>".$res['mobileno']."</td>";
                                    echo "<td>".$res['useraddress']."</td>";
                                    echo "<td>".$res['food']."</td>";
                                    echo "<td>".$res['medicines']."</td>";
                                    echo "<td>".$res['dailyneeds']."</td>";
                                    echo "</tr>";
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
            <div style="position: absolute; display: none;width:100%;" id="requests">
                <h2 style="text-align:center;margin-top:50px;">Requests</h1>
                <div style="width:90%;margin:auto;margin-top:20px;">
                    <table border='1' align="center" style="background-color: white;text-align:center;">
                        <tr style="background-color: tomato;color:white;">
                            <th>Request Id</th>
                            <th>Location</th>
                            <th>Disaster</th>
                            <th>Food</th>
                            <th>Medicines</th>
                            <th>Daily Needs</th>
                            <th>Physical Assistance</th>
                        </tr>
                        <?php
                            $host='localhost';
                            $dbusername='root';
                            $dbpassword='';
                            $dbname='pari';
                            $conn = mysqli_connect($host,$dbusername,$dbpassword, $dbname);
                            if($conn->connect_error)
                            {
                                die('Connection Failed :'.$conn->connect_error);
                            }
                            else
                            {
                                $query = "SELECT * from requests";
                                $result = mysqli_query($conn,$query);
                                while ($res = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>".$res['id']."</td>";
                                    echo "<td>".$res['loc']."</td>";
                                    echo "<td>".$res['disaster']."</td>";
                                    echo "<td>".$res['food']."</td>";
                                    echo "<td>".$res['medicines']."</td>";
                                    echo "<td>".$res['dailyneeds']."</td>";
                                    echo "<td>".$res['physicalassistance']."</td>";
                                    echo "</tr>";
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer">
            <div style="width: 40%;float:left; color: white;height: 100%;margin-left: 10%;position: relative;">
                <h2
                    style="font-family: 'Roboto';font-weight: 400;letter-spacing: 2px;margin-bottom: 25px;margin-top: 25px;">
                    Made with <span class="fas fa-heart" id="love"></span> by Abhinav and Rohith</h2>
            </div>
            <div style="width: 40%;float: right;color: white;height: 100%;margin-right: 10%;">
                <ul style="float: right;align-items: center;">
                    <li class="socialhover" style="display:inline-block;margin: 0 3px; ">
                        <a href="#" class="socialhover">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="socialhover" style="display:inline-block;margin: 0 3px; ">
                        <a href="#" class="socialhover">
                            <i class="far fa-envelope"></i>
                        </a>
                    </li>
                    <li class="socialhover" style="display:inline-block;margin: 0 3px;">
                        <a href="#" class="socialhover">
                            <i class="fas fa-phone"></i>
                        </a>
                    </li>
                    <li class="socialhover" style="display:inline-block;margin: 0 3px;">
                        <a href="#" class="socialhover">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script>
    function toggle(item) {
        var don = document.getElementById("donations");
        var req = document.getElementById("requests");
        if (item === 1) {
            req.style.display = 'none';
            don.style.display = 'block';
        }else{
            don.style.display = 'none';
            req.style.display = 'block';
        }
    }
</script>

</html>