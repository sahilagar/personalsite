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

    $sql = "SELECT songs.song_id, songs.song_name, artists.artist_name, genres.genre_name FROM songs
        JOIN artists 
            ON songs.artist_id = artists.artist_id
        JOIN genres
            ON songs.genre_id = genres.genre_id;";


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
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        window.onkeydown = function(event) {
           if (event.keyCode === 13) {
              alert("Kanye Omari West , is an American rapper, singer, songwriter, record producer, entrepreneur and fashion designer. His musical career has been marked by dramatic changes in styles, incorporating an eclectic range of influences from soul, baroque-pop, electro, indie rock, synth-pop, industrial and gospel. Over the course of his career, West has been responsible for cultural movements and progressions within mainstream hip hop and popular music at large.  \nSZA is an American singer and songwriter. Rowe was born in Saint Louis, Missouri, and later relocated to Maplewood, New Jersey.[1][5] In October 2012, SZA self-released her debut EP, See.SZA.Run, which she then followed up with her second EP, titled S, in April 2013. In July 2013, it was revealed that she had signed to the hip hop record label Top Dawg Entertainment, through which she released Z, her third EP and first retail release, in April 2014.\nAbel Makkonen Tesfaye (born 16 February 1990), better known by his stage name The Weeknd, is a Canadian singer, songwriter, and record producer. Tesfaye has helped broadened R&B's musical palette to incorporate indie and electronic styles; his work has been categorized with the alternative R&B tag."
                );
           }
        };


    </script>
</head>
<body>
    <?php require 'nav.html'; ?>

    <p>Press enter to learn more about the artists </p>
    <h1>Recommendations:</h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-responsive mt-4">
                    <thead>
                        <tr>
                            <th></th>
                            
                            <th>Song Name</th>
                            <th>Artist Name</th>
                            <th>Genre</th>
                            <th></th>
                           <!--  <th>Release Date</th> -->
                        </tr>
                    </thead>
                    <tbody>

                        <?php while($row = $results->fetch_assoc() ) :?>
                            <tr>
<!--                                 <td><a href="details.php?dvd_title_id=<?php echo $row['dvd_title_id'];?>"><?php echo $row['title']; ?></a></td> -->
                                <td>
                                    <a href="delete.php?song_id=<?php echo $row['song_id'];?>" class="btn btn-outline-danger" 
                                        onclick="return confirm('You are about to delete song <?php echo $row['song_name']; ?>. Are you sure?') ">
                                        Delete
                                    </a>
                                </td>
                                <td><?php echo $row['song_name']; ?></td>
                                <td><?php echo $row['artist_name']; ?></td>
                                <td><?php echo $row['genre_name']; ?></td>
                                <td>
                                    <a href="update.php?song_id=<?php echo $row['song_id'];?>" class="btn btn-secondary" >
                                        Update
                                    </a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div> <!-- .col -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

     <form>
      <a href="add_form.php" class="btn btn-primary btn-lg btn-block mt-4 mt-md-2" role="button" style="background-color: #800000;">Add a Song</a>
    </form>


 
    <?php include 'footer.html'; ?>
 
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
     
</body>
</html>