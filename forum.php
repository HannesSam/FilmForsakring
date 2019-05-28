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
        <h1> Forum </h1>

    </div>

    <div class="box-1">
        <h1>skicka in en kommentar</h1>

        <form>
            <label for="movieTitle">Filmtitel:</label> <br>
            <input id="movieTitle" type="text" placeholder="skriv titel på filmen.."><br>
            <br>
            <label for="comment">Kommentar:</label> <br>
            <textarea id="comment" type="text" placeholder="Skriv kommentar.."> </textarea><br>
            <br>

            <form class="rating">
                <label>
                    <input type="radio" name="stars" value="1" />
                    <span class="icon">★</span>
                </label>
                <label>
                    <input type="radio" name="stars" value="2" />
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                </label>
                <label>
                    <input type="radio" name="stars" value="3" />
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                </label>
                <label>
                    <input type="radio" name="stars" value="4" />
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                </label>
                <label>
                    <input type="radio" name="stars" value="5" />
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                </label>
            </form>
            <br>
            <br>
            <input id="submitComment" class="button" type="button" value="skicka in">

        </form>
    </div>
    <br>

    <div class="box-1">
        <h2> Sök på en film för att se kommentarer om filmen </h2>

        <form name="bar">
            <input type="text" id="searchInput" placeholder="vilken film vill du söka på?">
            <button class="button" id="searchMovie" type="button">Search</button>

        </form>

    </div>



    <footer>
        <div class="footer">
            <h2> FilmFörsäkring AB </h2>
            <h3> since 2019 </h3>
        </div>
    </footer>
</body>

</html>