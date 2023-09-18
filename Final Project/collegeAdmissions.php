<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>College Database</title>
    <style>
        body {
            background-image: url('https://housedemocrats.wa.gov/tmp/2012/12/DomeWebsiteBackground21.jpg');
            background-size: cover;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th {
            background: green;
            color: white;
            font-weight: bold;
            padding: 8px;
            text-align: left;
            font-size: 20px;
        }

        td {
        	padding: 6px;
            	text-align: left;
            	border-bottom: 1px solid white;
            	font-family: arial, verdana, sans-serif;
            	font-size: 16px;
        }
	tr:nth-child(even) {
  		background-color: #D6EEEE;
	}
	tr:nth-child(odd) {
  		background-color: white;
	}
        tr:hover {
            	background-color: LightGray;
  		font-weight: bold;
        }
	

    </style>
    <?php require './navbar.php'; ?>
</head>
<body>

<?php
$servername = "localhost";
$username = "webuser";
$password = "carrollcc";
$database = "admissionsPredictor";

try{
    $pdo = new PDO("mysql:host=$servername;dbname=$database", "$username", "$password");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

// Attempt select query execution
try{
    $sql = "SELECT * FROM colleges";   
    $result = $pdo->query($sql);
    if($result->rowCount() > 0){
        echo "<table>\r\n"; 
        echo "<tr>\r\n";
        echo "<th>College Name</th>\r\n";
        echo "<th>Average SAT Score</th>\r\n";
        echo "<th>Average GPA</th>\r\n";
        echo "<th>City</th>\r\n";
        echo "<th>State</th>\r\n";
        echo "<th>Zip Code</th>\r\n";
        echo "</tr>\r\n";
        while($row = $result->fetch()){
            echo "<tr>";
            echo "<td>" . $row['collegeName'] . "</td>\r\n";
            echo "<td>" . $row['avgSAT'] . "</td>\r\n";
            echo "<td>" . $row['avgGPA'] . "</td>\r\n";
            echo "<td>" . $row['city'] . "</td>\r\n";
            echo "<td>" . $row['state'] . "</td>\r\n";
            echo "<td>" . $row['zip'] . "</td>\r\n";
            echo "</tr>\r\n";
        }
        echo "</table>";
        // Free result set
        unset($result);
    } else{
        echo "<p>No records matching your query were found.</p>";
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
?>
<br><br>
</body>
<footer>
	<?php require './footer.php'; ?>
</footer>
</html>
