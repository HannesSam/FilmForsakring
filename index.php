<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="/assets/css/app.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/app.js"></script>
    <title>FilmFörsäkring</title>
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
        <div id="reviewsDiv">

        </div>
    </div>

    <footer>
        <div class="footer">
            <h2> FilmFörsäkring AB </h2>
            <h3> since 2019 </h3>
        </div>
    </footer>
</body>

</html>