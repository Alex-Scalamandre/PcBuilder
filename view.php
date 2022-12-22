<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
    <title>List Viewing</title>
</head>
<body>
	<section>
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

		$listID = $_REQUEST['listID'];

        $sql = "SELECT * FROM lists WHERE person='$listID'";

        $result = $conn->query($sql);

        echo "<h1>Viewing results for Your List</h1>" . "<br>"; //doesn't show ID when there are no rows
			if($result->num_rows > 0){
			//Output table
			echo '<table class="table">
					<tr>
						<th class="th">Name</th>
						<th class="th">Type</th>
						<th class="th">Brand</th>
						<th class="th">Price</th>
						<th class="th">Link</th>
						<th class="th">CPU Type</th>
						<th class="th">Motherboard Size</th>
					</tr>';
			//Output data of rows.
				while($row = $result->fetch_assoc()){
					echo "<tr>
							<td class = td>" . $row["name"] . "</td>
							<td class = td>" . $row["type"] . "</td>
							<td class = td>" . $row["brand"] . "</td>
							<td class = td>" . $row["price"] . "</td>
							<td class = td><a href=\"" . $row["link"] . "\">" . $row["websitename"] . "</a></td>
							<td class = td>" . $row["cpu_compat"] . "</td>
							<td class = td>" . $row["size"] . "</td>
						</tr>" ;
				}
			echo "</table>";
            } else {
                echo "<h1>No List</h1><br>";
            }
    ?>
	<a href="viewList.html" class="button-1 centered">Back</a>
	</section>
</body>
</html>