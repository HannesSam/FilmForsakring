<!DOCTYPE html>
<html>

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
        <h1> Filmförsäkring </h1>

    </div>
    <div class="searchbar">
        <form name="bar">
            <input type="text" id="searchInput" placeholder="vilken film vill du söka på?">
            <button class="button" id="searchMovie" type="button">Search</button>

        </form>
    </div>
    <div id="popUp">

        <div class="popUp">
            <h1 id="movieTitle"> </h1>
            <p id="summary"> </p>
        </div>

    </div>
    <?php include '_post-list.php';

    ?>
    <footer>
        <div class="footer">
            <h2> FilmFörsäkring AB </h2>
            <h3> since 2019 </h3>
        </div>
    </footer>
</body>

</html>