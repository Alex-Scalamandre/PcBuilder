<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Sign Up PHP</title>
</head>
<body>
    <?php
        // log in info
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "pc_builder";
		
		// log in
		$conn = new mysqli($servername, $username, $password, $dbname);

        // attempt connect
		if($conn->connect_error) {
			die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error . "</p>");
		}

        $user = $_REQUEST['user'];
        $pass = $_REQUEST['pass'];

        $sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";

        $result = $conn->query($sql);

        echo "<h1>You Have Been Signed Up!</h1>";
    ?>
    <a href="./index.html" class="button-1 centered">Return To Login</a>
</body>
</html>