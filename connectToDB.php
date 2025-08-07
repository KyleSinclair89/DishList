<!-- PLEASE READ LINES 11-12 -->
<!DOCTYPE html>
<html>
<head>
	<title>PHP Connect MySQL Database</title>
</head>
<body>
	<p><?php
		$servername = "localhost";
		$username = "root"; // MySQL username
		$password = ""; // MySQL password : ENTER YOUR OWN PASSWORD HERE.
		$dbname = ""; //database name : ENTER THE PROPOSED DATABASE NAME.
		
		// MySQL Connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check Connection
		if ($conn -> connect_error) {
			die ("<p style = 'color: red'>" . "Connection failed:".$conn->connect_error."</p>");
		echo "<i>DB Connected successfully...</i>"; 
		}
	?></p>
</body>
</html>
