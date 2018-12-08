<?php
	// as always, check that we have the parameters we MUST have
	if ( !isset($_GET['song_id']) || empty($_GET['song_id']) ) {
		$error = "Invalid URL.";
	}
	else {
		// do the usual DB stuff
		$host = "303.itpwebdev.com";
	    $user = "sahilaga_db_user";
	    $pass = "Cheese7271998";
	    $db = "sahilaga_portfolio";

	// DB Connection
		$mysqli = new mysqli($host, $user, $pass, $db);
		if ( $mysqli->connect_errno ) {
			echo $mysqli->connect_error;
			exit();
		}

		$mysqli->set_charset('utf8');

		$sql = "DELETE FROM songs 
		WHERE song_id = " . $_GET['song_id'] . ";";

		$results = $mysqli->query($sql);
		if(!$results) {
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
    <title>DELETE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .navbar-light .navbar-brand, .navbar-light .navbar-nav .nav-link {
            color: #FFF;
        }
        footer div {
            line-height: 50px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
	<?php require 'nav.html'; ?>
	<div class="container">
		<div class="row">
			<h1 class="col-12 mt-4">Delete a Song</h1>
		</div> <!-- .row -->
	</div> <!-- .container -->
	<div class="container">
		<div class="row mt-4">
			<div class="col-12">

	<?php if( isset($error) && !empty($error) ): ?>
		<div class="text-danger">
			<?php echo $error; ?>
		</div>
	<?php else: ?>
		<div class="text-success">
			<span class="font-italic">Track</span> was successfully deleted
		</div>
	<?php endif;?>

			</div> <!-- .col -->
		</div> <!-- .row -->
		<div class="row mt-4 mb-4">
			<div class="col-12">
				<a href="recommender.php" role="button" style="background-color: #800000;" class="btn btn-primary">Back to Recommender</a>
			</div> <!-- .col -->
		</div> <!-- .row -->
	</div> <!-- .container -->

	<?php include 'footer.html'; ?>
 
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>