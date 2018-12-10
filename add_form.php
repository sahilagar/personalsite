<?php

$host = "303.itpwebdev.com";
$user = "sahilaga_db_user";
$pass = "Cheese7271998";
$db = "sahilaga_portfolio";


// DB Connection.
$mysqli = new mysqli($host, $user, $pass, $db);
if ( $mysqli->connect_errno ) {
	echo $mysqli->connect_error;
	exit();
}

$mysqli->set_charset('utf8');

// Genres:
$sql_genres = "SELECT * FROM genres;";
$results_genres = $mysqli->query($sql_genres);
if ( $results_genres == false ) {
	echo $mysqli->error;
	exit();
}

// Media Types:
$sql_artists = "SELECT * FROM artists;";
$results_artists = $mysqli->query($sql_artists);
if ($results_artists == false ) {
	echo $mysqli->error;
	exit();
}

// Close DB Connection
$mysqli->close();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Include, Require</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">   
    <script type="text/javascript">
    	function validateForm() {
		  var x = document.forms["myForm"]["track_name"].value;
		  if (x == "") {
		    alert("Track Name must be filled out");
		    return false;
		  }
		}	
    </script>
</head>
<body>
	<?php require 'nav.html'; ?>

	<div class="container">
		<div class="row">
			<h1 class="col-12 mt-4 mb-4">Add a Song</h1>
		</div> <!-- .row -->
	</div> <!-- .container -->
	<div class="container">

		<form name = "myForm" action="add_confirmation.php" onsubmit="return validateForm()" method="POST">

			<div class="form-group row">
				<label for="name-id" class="col-sm-3 col-form-label text-sm-right">
					Track Name: <span class="text-danger">*</span>
				</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="name-id" name="track_name">
				</div>
			</div> <!-- .form-group -->

			<div class="form-group row">
				<label for="artist-id" class="col-sm-3 col-form-label text-sm-right">
					Artist: <span class="text-danger">*</span>
				</label>
				<div class="col-sm-9">
					<select name="artist" id="artist-id" class="form-control">
						<option value="" selected disabled>-- Select One --</option>

						<?php while( $row = $results_artists->fetch_assoc() ): ?>

							<option value="<?php echo $row['artist_id']; ?>">
								<?php echo $row['artist_name']; ?>
							</option>

						<?php endwhile; ?>
					</select>
				</div>
			</div> <!-- .form-group -->

			<div class="form-group row">
				<label for="genre-id" class="col-sm-3 col-form-label text-sm-right">
					Genre: <span class="text-danger">*</span>
				</label>
				<div class="col-sm-9">
					<select name="genre" id="genre-id" class="form-control">
						<option value="" selected disabled>-- Select One --</option>

						<?php while( $row = $results_genres->fetch_assoc() ): ?>

							<option value="<?php echo $row['genre_id']; ?>">
								<?php echo $row['genre_name']; ?>
							</option>

						<?php endwhile; ?>
					</select>
				</div>
			</div> <!-- .form-group -->

			<div class="form-group row">
				<div class="col-sm-3"></div>
				<div class="col-sm-9 mt-2">
					<button type="submit" class="btn btn-primary" style="background-color: #800000;">Submit</button>
					<button type="reset" class="btn btn-light">Reset</button>
				</div>
			</div> <!-- .form-group -->
		</form>
	</div> <!-- .container -->



	<?php include 'footer.html'; ?>
 
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>