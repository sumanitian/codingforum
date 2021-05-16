<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
    .container {
        min-height: 87vh;
    }
    </style>
    <title>Suman Coding Forum</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>



    <!-- slider -->
    <div class="container my-3">
        <p>We are here to answer any question you may have about website development, Application Development, Carrier guidance and IT-related stuff. Reach out to us and we'll respond as soon as we can.</p>
        <p>Even if there is something you have always wanted to explore during your academic sessions and can't find at<a href="/forum"> Suman Coding Forum,</a> Let us know and we promise we'll do our best to find it for you and send you there</p>
        <?php
            $Msg = "";
            if(isset($_GET['error']))
            {
                $Msg = "Fill all the box";
                echo '<div class="alert alert-danger">'.$Msg.'</div>';
            }
            if(isset($_GET['success']))
            {
                $Msg = "Your Message Has been sent";
                echo '<div class="alert alert-success">'.$Msg.'</div>';
            }
        ?>
        <form action="contactform.php" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Your Name</label>
                <input type="text" class="form-control" name="name"id="name" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" name="mail" id="mail" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Subject</label>
                <input type="text" class="form-control" name="subject" id="name" placeholder="Subject">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Describe what you want to contact me for here</label>
                <textarea class="form-control" name="message" id="Message" rows="3"></textarea>
            </div>
            <button type="submit" name="send" class="btn btn-success">Send</button>
        </form>
    </div>



    <?php include 'partials/footer.php';?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>