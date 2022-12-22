<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deleteList</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <?php
    // log in info
		$servername = "localhost";
		$username = "root"; // change this to alexscal when uploading to compsci server
		$password = "";
		$dbname = "pc_builder";
		
		// log in
		$conn = new mysqli($servername, $username, $password, $dbname);

        // attempt connect
		if($conn->connect_error) {
			die("<p style='color:red'>" . "Connection failed: " . $conn->connect_error . "</p>");
		}

    $listname = $_REQUEST['listName'];

    $sql = "DELETE FROM lists WHERE person='$listname'";
    $sql_result = $conn->query($sql);
    ?>
    <section>
      <h1>Your list has been deleted!</h1>
      <a href="home.html" class="button-1 centered">To Home</a>
    </section>

    
  </body>
</html>