<?php 
if(isset($_POST['submit'])){
    $to = "sahila1618@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

    echo '<script language="javascript">';
    echo 'alert("message successfully sent")';
    echo '</script>';
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
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
    <script type="text/javascript">
    function validateForm() {
      var x = document.forms["myForm"]["first_name"].value;
      if (x == "") {
        alert("First name must be filled out");
        return false;
      }

      x = document.forms["myForm"]["last_name"].value;
      if (x == "") {
        alert("Last name must be filled out");
        return false;
      }

      x = document.forms["myForm"]["email"].value;
      if (x == "") {
        alert("Email must be filled out");
        return false;
      }

      x = document.forms["myForm"]["message"].value;
      if (x == "") {
        alert("message must be filled out");
        return false;
      }
    }
</script>    


    </script>
</head>
<body>
    <?php require 'nav.html'; ?>

    <form name = "myForm" action="" onsubmit="return validateForm()" method="post">
        <div class="form-group col-12">
            First Name: <input type="text" class="form-control" name="first_name"><br>
        </div>

        <div class="form-group col-12">
           Last Name: <input type="text" class="form-control" name="last_name"><br>
        </div>
        
        <div class="form-group col-12">
           Email: <input type="text"  class="form-control" name="email"><br>
           <small id="emailHelp" class="form-text text-muted">Non USC Email otherwise it will get blocked : ), also check spam folder </small>
        </div>

        <div class="form-group col-12">
           Message:<br><textarea rows="5" class="form-control" name="message" cols="30"></textarea><br>
        </div>
        
<!--         <button type="submit" class="btn btn-primary" style="background-color: #800000;" name="submit" value="Submit">Submit</button> -->
        <input type="submit" class="btn btn-primary" style="background-color: #800000;" name="submit" value="Submit">
    </form>
 
    <?php include 'footer.html'; ?>
 
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
     
</body>
</html>