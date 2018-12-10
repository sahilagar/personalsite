<?php

if ( false) {

	// Missing required fields.
	$error = "Please fill out all required fields.";

} else {
	$host = "303.itpwebdev.com";
$user = "sahilaga_db_user";
$pass = "Cheese7271998";
$db = "sahilaga_portfolio";

	$mysqli = new mysqli($host, $user, $pass, $db);
	if ( $mysqli->errno ) {
		echo $mysqli->error;
		exit();
	}

	if ( isset($_POST['track_name']) && !empty($_POST['track_name']) ) {
		// User selected album value.
		$track_name = $_POST['track_name'];
	} else {
		// User did not select album value.
		$track_name = "null";
	}

	if ( isset($_POST['artist']) && !empty($_POST['artist']) ) {
		// User selected bytes value.
		$artist = $_POST['artist'];
	} else {
		// User did not select bytes value.
		$artist = "null";
	}

	if ( isset($_POST['genre']) && !empty($_POST['genre']) ) {
		// User typed in composer field.
		$genre =$_POST['genre'];
	} else {
		// User did not type in composer field.
		$genre = "null";
	}	

	$sql = "INSERT INTO songs
			VALUES(NULL,'".$track_name."', ".$artist.", ".$genre.");";

	// echo "<hr>" . $sql . "<hr>";

	$results = $mysqli->query($sql);
	if ( !$results ) {
		echo $mysqli->error;
		exit();
	}

	$mysqli->close();

}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Include, Require</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php require 'nav.html'; ?>
	<div class="container">
		<div class="row">
			<h1 class="col-12 mt-4">Add a Song</h1>
		</div> <!-- .row -->
	</div> <!-- .container -->
	<div class="container">
		<div class="row mt-4">
			<div class="col-12">

				<?php if ( isset($error) && !empty($error) ) : ?>

		<div class="text-danger">
			<?php echo $error; ?>
		</div>

	<?php else : ?>

		<div class="text-success">
			<span class="font-italic"><?php echo $track_name; ?></span> was successfully added.
		</div>

	<?php endif; ?>

			</div> <!-- .col -->
		</div> <!-- .row -->
		<div class="row mt-4 mb-4">
			<div class="col-12">
				<a href="add_form.php" role="button" class="btn btn-primary" style="background-color: #800000;">Back to Add</a>
			</div> <!-- .col -->
		</div> <!-- .row -->
	</div> <!-- .container -->

	<?php include 'footer.html'; ?>
 
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>