<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>College Admissions Predictor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style> 
	h4 {
        	text-align: center;
        }
	h5 {
            	text-align: center;
  		font-style: italic;
		min-height: 10vh;
        }
	.card {
        	margin: 0 auto; 
        	float: none; 
        	margin-bottom: 10px;
	}

    </style>
    <?php require './navbar.php'; ?>

</head>

<body>
<br>
<h5>This college admissions predictor computes the chance to admission to a college based on historical admissions data based on SAT and GPA.  </h5>

<h4 style="min-height: 60vh;">
<?php
$servername = "localhost";
$username = "webuser";
$password = "carrollcc";
$database = "admissionsPredictor";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT collegeName FROM colleges";
    $result = $pdo->query($sql);
    if ($result->rowCount() > 0) {
        echo "<form method='get' action='/college_action.php'>";
	echo "<div class='card' style='width: 50rem;'>";
        echo "<label for='collegeName'>Predict me for:&nbsp;</label>";
        echo "<select name='collegeName' id='collegeName' required>";
        echo "<option value=''>--Select College--</option>";
        while ($row = $result->fetch()) {
            echo "<option value='" . $row['collegeName'] . "'>" . $row['collegeName'] . "</option>";
        }
        echo "</select>";
        echo "<br><br>";
        echo "<label for='sat'>Enter in your SAT score:&nbsp; </label>";
	echo "<input type='number' id='sat' name='sat' min='0' max='1600' required>";
        echo "<label for='gpa'>&nbsp;Enter in your Unweighted GPA:&nbsp; </label>";
	echo "<input type='number' id='gpa' name='gpa' step='0.01' min='0' max='5' required>";
	echo "</div>";
        echo "<br><br>";
        echo "<input type='submit' value='Submit' class='btn btn-primary btn-lg'>";
        echo "</form>";
    } else {
        echo "<p>No records matching your query were found.</p>";
    }
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
?>
</h4>
</body>

<footer>
	<?php require './footer.php'; ?>
</footer>

</html>
