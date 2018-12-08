 
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
 
    <div class="container mt-4 mb-3">
        <div class="row">
            <h1 class="col-12">Project 1: Embedded Systems</h1>
            <p class="col-12">Basic arduino</p>
 
 
            <h2 class="col-12">Project 2: IOS app</h2>
            <p class="col-12"> Ticket</p>
 
            <!-- <p class="col-12">Fusce hendrerit dui eu odio fermentum, ac aliquet ex luctus. Integer nec mi vitae velit porta elementum. Praesent euismod consectetur consequat. Integer non dignissim lectus, et egestas enim. Fusce in congue tellus. Aenean tincidunt ante sed sem pellentesque, id ultrices orci lobortis. Curabitur enim elit, blandit porta ultrices ut, dictum sed tortor. Sed ut venenatis nunc, vitae finibus felis. Nullam elementum bibendum sapien, nec ultrices neque maximus nec. In commodo ligula nulla, id pulvinar nisl porta vitae.</p>
 
            <h2 class="col-12">Cras ut egestas</h2>
            <p class="col-12">Cras ut egestas tellus, quis tempus augue. Cras vestibulum consectetur dapibus. Nullam suscipit ultricies aliquam. In venenatis ultrices arcu, vel fringilla nibh. Quisque varius elit eget quam egestas pulvinar. Donec sit amet mi dolor. Quisque quis luctus ipsum, ac ornare nunc. Nunc in nisl eget urna ultricies dapibus. Phasellus lacinia enim arcu. Phasellus congue odio urna, eget facilisis mauris eleifend ultrices. Aenean iaculis, lorem quis euismod sagittis, quam ipsum ornare tortor, vitae luctus arcu lorem id lacus. Vestibulum varius, erat eu eleifend efficitur, urna risus interdum ex, eget tempus nibh eros sed massa.</p>
 
            <p class="col-12">Nullam vel magna sed sem cursus faucibus. Aenean sodales dolor eget purus molestie vulputate. Morbi in malesuada mauris, ut bibendum ligula. Integer tellus dolor, vulputate eu risus sed, tincidunt consectetur mi. Sed mattis faucibus vulputate. Aenean ornare mollis lacus at volutpat. Nunc enim eros, commodo sed rhoncus a, pretium a nisl. Aenean ac arcu finibus nunc pellentesque pretium nec in quam. Phasellus elementum arcu vel placerat cursus.</p> -->
        </div> <!-- .row -->
    </div> <!-- .container -->
 
    <?php include 'footer.html'; ?>
 
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
     
</body>
</html>