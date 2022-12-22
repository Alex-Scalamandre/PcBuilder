<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>View Parts</title>
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

        $cpu = "SELECT * FROM cpus";
        $gpu = "SELECT * FROM gpus";
        $motherboard = "SELECT * FROM motherboards";
        $psu = "SELECT * FROM psus";

        $cpu_result = $conn->query($cpu);
        $gpu_result = $conn->query($gpu);
        $mother_result = $conn->query($motherboard);
        $psu_result = $conn->query($psu);

        echo "<h1>Viewing All Parts</h1>" . "<br>"; //doesn't show ID when there are no rows
			echo '<h2>CPUs</h2>';
            if($cpu_result->num_rows > 0){
			//Output table
			echo '<table class="table">
					<tr>
						<th class="th">Name</th>
						<th class="th">Brand</th>
						<th class="th">Price</th>
						<th class="th">Link</th>
					</tr>';
			//Output data of rows.
				while($row = $cpu_result->fetch_assoc()){
					echo "<tr>
							<td class = td>" . $row["Name"] . "</td>
							<td class = td>" . $row["Brand"] . "</td>
							<td class = td>" . $row["Price"] . "</td>
							<td class = td><a href=\"" . $row["Link"] . "\">" . $row["Link"] . "</a></td>
						</tr>" ;
				}
			echo "</table>";

            echo "<h2>GPUs</h2>";

            if($gpu_result->num_rows > 0){
			//Output table
			echo '<table class="table">
					<tr>
						<th class="th">Name</th>
						<th class="th">Price</th>
						<th class="th">Link</th>
					</tr>';
			//Output data of rows.
				while($row = $gpu_result->fetch_assoc()){
					echo "<tr>
							<td class = td>" . $row["Name"] . "</td>
							<td class = td>" . $row["Price"] . "</td>
							<td class = td><a href=\"" . $row["Link"] . "\">" . $row["Link"] . "</a></td>
						</tr>" ;
				}
            }
			echo "</table>";

            echo '<h2>Motherboards</h2>';
            if($mother_result->num_rows > 0){
                //Output table
                echo '<table class="table">
                        <tr>
                            <th class="th">Name</th>
                            <th class="th">Price</th>
                            <th class="th">Link</th>
                            <th class="th">CPU Type</th>
                            <th class="th">Size</th>
                        </tr>';
                //Output data of rows.
                    while($row = $mother_result->fetch_assoc()){
                        echo "<tr>
                                <td class = td>" . $row["Name"] . "</td>
                                <td class = td>" . $row["Price"] . "</td>
                                <td class = td><a href=\"" . $row["Link"] . "\">" . $row["Link"] . "</a></td>
                                <td class = td>" . $row["cpu_compat"] . "</td>
                                <td class = td>" . $row["Size"] . "</td>
                            </tr>" ;
                    }
                echo "</table>";
            }

            echo "<h2>PSUs</h2>";

            echo "<section>";

            if($psu_result->num_rows > 0){
			//Output table
			echo '<table class="table">
					<tr>
						<th class="th">Name</th>
						<th class="th">Price</th>
						<th class="th">Link</th>
					</tr>';
			//Output data of rows.
				while($row = $psu_result->fetch_assoc()){
					echo "<tr>
							<td class = td>" . $row["Name"] . "</td>
							<td class = td>" . $row["Price"] . "</td>
							<td class = td><a href=\"" . $row["Link"] . "\">" . $row["Link"] . "</a></td>
						</tr>" ;
				}
            }

            } else {
                echo "No List<br>";
            }
            echo "</section>";
    ?>
    </section>
</body>
</html>