<?php
//Creates new record as per request
    //Connect to database
    $servername = "us-cdbr-east-04.cleardb.com";
    $username = "bc06134d8f3e1f";
    $password = "550425d9";
    $dbname = "heroku_78638205065f537";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    //Get current date and time
    date_default_timezone_set('Asia/Bangkok'');
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