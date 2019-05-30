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
        <h1> Logga in </h1>
    </div>
    <div class="box-1">
        <form>
            <label for="emailLogin">Email:</label> <br>
            <input id="emailLogin" type="text" placeholder="fyll i din email.."><br>
            <br>
            <label for="passwordLogin">Lösenord:</label> <br>
            <input id="passwordLogin" type="password" placeholder="fyll i ditt lösenord.."> <br>
            <br>
            <input id="submitLogin" class="button" type="button" value="Logga in">
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