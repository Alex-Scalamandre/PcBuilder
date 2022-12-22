<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Questionnaire Submit</title>
</head>
<body>
    <section>
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

        if(isset($_POST['low'])){
            $cpu = "INSERT INTO lists(name, price, link, brand) SELECT Name, Price, Link, Brand FROM cpus WHERE Name='Core i5-13600K'";
            
            //$cpu1 = "INSERT INTO lists(person, type) VALUES ('$listname', 'CPU')";
            $cpu1 = "UPDATE lists SET person='$listname', type='CPU', websitename='Link' WHERE Name='Core i5-13600K'";
            

            $gpu = "INSERT INTO lists(name, price, link) SELECT Name, Price, Link FROM gpus WHERE Name='GeForce RTX 3060'";
            
            //$gpu1 = "INSERT INTO lists(person, type) VALUES ('$listname', 'GPU')";
            $gpu1 = "UPDATE lists SET person='$listname', type='GPU', websitename='Link' WHERE Name='GeForce RTX 3060'";

            $motherboard = "INSERT INTO lists(name, price, link, cpu_compat, size) SELECT Name, Price, Link, cpu_compat, Size FROM motherboards WHERE Name='Asus ROG STRIX Z690-A'";
            
            //$motherboard1 = "INSERT INTO lists(person, type) VALUES ('$listname', 'Motherboard')";
            $motherboard1 = "UPDATE lists SET person='$listname', type='Motherboard', websitename='Link' WHERE Name='Asus ROG STRIX Z690-A'";
            

            $cpu_result = $conn -> query($cpu);
            $cpu1_result = $conn -> query($cpu1);

            $gpu_result = $conn -> query($gpu);
            $gpu1_result = $conn -> query($gpu1);

            $mother_result = $conn -> query($motherboard);
            $mother1_result = $conn -> query($motherboard1);
        } elseif(isset($_POST['mid'])){
            $cpu = "INSERT INTO lists(name, price, link, brand) SELECT Name, Price, Link, Brand FROM cpus WHERE Name='Ryzen 9 7950X'";
            $cpu_result = $conn -> query($cpu);
            $cpu1 = "UPDATE lists SET person='$listname', type='CPU', websitename='Link' WHERE Name='Ryzen 9 7950X'";
            $cpu1_result = $conn -> query($cpu1);

            $gpu = "INSERT INTO lists(name, price, link) SELECT Name, Price, Link FROM gpus WHERE Name='AMD Radeon RX 6800'";
            $gpu_result = $conn -> query($gpu);
            $gpu1 = "UPDATE lists SET person='$listname', type='GPU', websitename='Link' WHERE Name='AMD Radeon RX 6800'";
            $gpu1_result = $conn -> query($gpu1);
            
            $motherboard = "INSERT INTO lists(name, price, link, cpu_compat, size) SELECT Name, Price, Link, cpu_compat, Size FROM motherboards WHERE Name='ASUS ROG STRIX B550-F GAMING'";
            $mother_result = $conn -> query($motherboard);
            $motherboard1 = "UPDATE lists SET person='$listname', type='Motherboard', websitename='Link' WHERE Name='ASUS ROG STRIX B550-F GAMING'";
            $mother1_result = $conn -> query($motherboard1);
        } elseif(isset($_POST['high'])){
            $cpu = "INSERT INTO lists(name, price, link, brand) SELECT Name, Price, Link, Brand FROM cpus WHERE Name='Intel Core i9-13900K'";
            $cpu_result = $conn -> query($cpu);
            $cpu1 = "UPDATE lists SET person='$listname', type='CPU', websitename='Link' WHERE Name='Intel Core i9-13900K'";
            $cpu1_result = $conn -> query($cpu1);

            $gpu = "INSERT INTO lists(name, price, link) SELECT Name, Price, Link FROM gpus WHERE Name='GeForce RTX 4080'";
            $gpu_result = $conn -> query($gpu);
            $gpu1 = "UPDATE lists SET person='$listname', type='GPU', websitename='Link' WHERE Name='GeForce RTX 4080'";
            $gpu1_result = $conn -> query($gpu1);

            $motherboard = "INSERT INTO lists(name, price, link, cpu_compat, size) SELECT Name, Price, Link, cpu_compat, Size FROM motherboards WHERE Name='Asus ROG STRIX Z690-A'";
            $mother_result = $conn -> query($motherboard);
            $motherboard1 = "UPDATE lists SET person='$listname', type='Motherboard', websitename='Link' WHERE Name='Asus ROG STRIX Z690-A'";
            $mother1_result = $conn -> query($motherboard1);
        }

        if(isset($_POST['futureYes'])){
            $psu = "INSERT INTO lists(name, price, link) SELECT Name, Price, Link FROM psus WHERE Name='ARESGAME AGT Series 1000W Power Supply'";
            $psu_result = $conn -> query($psu);
            $psu1 = "UPDATE lists SET person='$listname', type='PSU', websitename='Link' WHERE Name='ARESGAME AGT Series 1000W Power Supply'";
            $psu1_result = $conn -> query($psu1);
        } elseif(isset($_POST['futureNo'])){
            $psu = "INSERT INTO lists(name, price, link) SELECT Name, Price, Link FROM psus WHERE Name='EVGA SuperNOVA 650 GT, 80 Plus Gold 650W'";
            $psu_result = $conn -> query($psu);
            //$psu1 = "INSERT INTO lists(person, type) VALUES ('$listname', 'PSU')";
            $psu1 = "UPDATE lists SET person='$listname', type='PSU', websitename='Link' WHERE Name='EVGA SuperNOVA 650 GT, 80 Plus Gold 650W'";
            $psu1_result = $conn -> query($psu1);
        }
        ?>


        <h1>Your Answers Have Been Submitted!</h1>
        <br>
        <br>
        <br>
        <br>
        <a href="home.html" class="button-1 centered">To Home</a>
    </section>
</body>
</html>