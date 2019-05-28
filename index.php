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
<div class="topnav">
        <a href="index.php">Hem</a>
        <a href="login.php">Logga in</a>
        <a class="active" href="register.php">Registrera dig</a>
        <a href="forum.php">Forum</a>
        <a href="loggout.php">Logga ut</a>
</div>
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
    <div id="popUp" class="popUp">
        <h1 id="movieTitle"> </h1>
        <p id="summary"> </p>
    </div>

    <footer>
        <div class="footer">
            <h2> FilmFörsäkring AB </h2>
            <h3> since 2019 </h3>
        </div>
    </footer>
</body>

</html>