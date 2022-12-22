<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Log In PHP</title>
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

        $uname = $_POST['user'];
        $pass = $_POST['pass'];

        $sql = "SELECT username FROM users WHERE username='$uname'";

        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
            if($uname === $row['username']) {
                echo "<h1>You have been logged in!</h1>";
                echo "<a href='./home.html' class='button-1 centered'>To Home</a>";
                exit();
            } else {
                echo "<h1>Username or Password is Incorrect</h1>";
                echo "<a href='login.html' class='button-1 centered'>Try Again!</a>";
            }
        }
    ?>
    <h1>Username or Password is Incorrect</h1>
    <fieldset class="centered">
        <a href='login.html' class='button-1'>Try Again!</a>
        &emsp;
        <a href='index.html' class='button-1'>To Login/Sign Up</a>
    </fieldset>
    
</body>
</html>