<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<head>
    <meta charset="UTF-8">
    <title>FilmFörsäkring</title>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/app.js"></script>
    <link rel="stylesheet" href="assets/css/app.css">
</head>


<body>
    <?php
    include("include/topnav.php");
    topnav();
    ?>
    <br>
    <br>
    <br>
    <br>
    <div class="title">
        <h1> Admin </h1>

    </div>
    <div class="box-1">
    
    <?php
    include"getusers.php";
    ?>
    
    </div>
    <br>





    <footer>
        <div class="footer">
            <h2> FilmFörsäkring AB </h2>
            <h3> since 2019 </h3>
        </div>
    </footer>
</body>

</html>
