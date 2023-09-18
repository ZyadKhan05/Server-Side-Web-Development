<!DOCTYPE html>
<html>
<head>
	<title>Admissions Predictor</title>
    	<?php require './navbar.php'; ?>
	<style> 
		h2 {
            		text-align: center;
			min-height: 50vh;

        	}
		h3 {
            		text-align: center;
        	}

		h5 {
            		text-align: center;
  			font-style: italic;
			min-height: 10vh;
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
			echo "<h2 style='color:green;'>Based off of your SAT score and Unweighted GPA, you are likely to be accepted by  " . $str . "<br><br>
			<img src='https://1.bp.blogspot.com/-_ei7N-VMvMA/Vua3IVQ112I/AAAAAAAAEN8/SoPnUrvQNNExOADbcNNGlAsXINGjwGg_w/w1200-h630-p-k-no-nu/images%2B%25281%2529.jpg'><br><br>
			<a href='./colleges.php'class='btn btn-primary btn-lg' role='button'>Restart the Admissions Predictor</a></h2>";
	
		}
		else {
    			$sql = "SELECT avgGPA, avgSAT FROM colleges WHERE collegeName = '$str'";
    			$result = $pdo->query($sql);
    			$row = $result->fetch();
    			echo "<h2 style='color:red;'>" . $str . " will likely not accept you unless you have strong extracurriculars.<br><br>
            		Admitted students at " . $str . " average an SAT score of " . $row['avgSAT'] . " and a Unweighted GPA of " . $row['avgGPA'] .".</h2>";
}	} catch (PDOException $e) {
		die("ERROR: Could not able to execute $sql. " . $e->getMessage());
	}

	// Close connection
	unset($pdo);
	?>

</body>
<footer>
	<?php require './footer.php'; ?>
</footer>
</html>
