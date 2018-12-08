<?php

    $host = "303.itpwebdev.com";
    $user = "sahilaga_db_user";
    $pass = "Cheese7271998";
    $db = "sahilaga_portfolio";

    $mysqli = new mysqli($host, $user, $pass, $db);
 
    // Check for errors
    if($mysqli->connect_errno) {
        echo $mysqli->connect_error;
        exit();
    }

    $mysqli->set_charset('utf-8');

    $sql = "SELECT songs.song_name, artists.artist_name FROM songs
    JOIN artists 
    ON songs.artist_id = artists.artist_id;";

    echo $sql;

    $results = $mysqli->query($sql);

    $num_rows = $results->num_rows;

    if(!$results) {
        echo $mysqli->$error;
        exit();
    }
 
    $mysqli->close();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Include, Require</title>
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
 
    <form>
        <h1> Recommend Song </h1>
      <div class="form-group col-12" >
        <label for="song_name">Song name</label>
        <input type="song_name" class="form-control" id="song_name" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">I'll never share your email with anyone else.</small>
      </div>

     
      <div class="form-group col-12">
        <label for="song_artist">Song author</label>
        <textarea class="form-control" id="song_artist" rows="3"></textarea>
      </div>


      <button type="submit" class="btn btn-primary btn-block" style="background-color: #800000;">Submit</button>
    </form>

    <form>
        <h1> Recommend Book </h1>
      <div class="form-group col-12" >
        <label for="book_name">Book name</label>
        <input type="book_name" class="form-control" id="book_name" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">I'll never share your email with anyone else.</small>
      </div>

     
      <div class="form-group col-12">
        <label for="book_author">Book author</label>
        <textarea class="form-control" id="book_author" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary btn-block" style="background-color: #800000;">Submit</button>
    </form>

    <h1>Recommendations for songs: </h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-responsive mt-4">
                    <thead>
                        <tr>
                            <th>Song Name</th>
                            <th>Artist Name</th>
                           <!--  <th>Release Date</th> -->
                        </tr>
                    </thead>
                    <tbody>

                        <?php while($row = $results->fetch_assoc() ) :?>
                            <tr>
<!--                                 <td><a href="details.php?dvd_title_id=<?php echo $row['dvd_title_id'];?>"><?php echo $row['title']; ?></a></td> -->
                                <td><?php echo $row['song_name']; ?></td>
                                <td><?php echo $row['artist_name']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div> <!-- .col -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->


 
    <?php include 'footer.html'; ?>
 
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
     
</body>
</html>