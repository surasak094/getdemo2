<?php
//Creates new record as per request
    //Connect to database
    $servername = "mysql-52539-0.cloudclusters.net";
    $username = "admin";
    $password = "Gg7Ok1pX";
    $dbname   = "SurasakDB";
    $dbServerPort = "18850";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $dbServerPort,);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    //Get current date and time
    date_default_timezone_set('Asia/Kolkata');
    $d = date("Y-m-d");
    //echo " Date:".$d."<BR>";
    $t = date("H:i:s");

    if(!empty($_GET['status']) && !empty($_GET['station']))
    {
    	$status = $_GET['status'];
    	$station = $_GET['station'];

	    $sql = "INSERT INTO logs (station, status, Date, Time)
		
		VALUES ('".$station."', '".$status."', '".$d."', '".$t."')";

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>