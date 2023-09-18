<!DOCTYPE html>
<html>
<head>
	<title>Admissions Predictor</title>
    	<?php require './navbar.php'; ?>
	<style> 
		h2 {
            		text-align: center;
        	}
		h3 {
            		text-align: center;
        	}

		h5 {
            		text-align: center;
  			font-style: italic;

        	}


	</style>
</head>
<body>
	<?php  
	$servername = "localhost";
	$username = "webuser";
	$password = "carrollcc";
	$database = "admissionsPredictor";

	$str = $_GET["collegeName"];
	$sat = $_GET["sat"];
	$gpa = $_GET["gpa"];
	
	echo "<h5>This college admissions predictor computes the chance to admission to " . $str . " based on historical admissions data based on SAT and GPA. </h5>";
	echo "<h3>Your SAT Score is " . $sat . "</h3>";
 	echo "<h3>Your Unweighted GPA is " . $gpa . "</h3>";

	try {
		$pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    		// Set the PDO error mode to exception
    		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT collegeName FROM colleges WHERE avgSAT <= $sat AND avgGPA <= $gpa AND collegeName = '$str'";
		$result = $pdo->query($sql);
		if ($result->rowCount() > 0) {
			echo "<h2>Based off of your SAT score and Unweighted GPA, you are likely to be accepted by  " . $str . "</h2>";
		} else {
			echo "<h2>" . $str . " will likely not accept you without having strong extracurriculars.</h2>";
		}
	} catch (PDOException $e) {
		die("ERROR: Could not able to execute $sql. " . $e->getMessage());
	}

	// Close connection
	unset($pdo);
	?>



	<footer>
		<?php require './footer.php'; ?>
	</footer>
</body>
</html>
