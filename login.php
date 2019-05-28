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
        <h1> Filmförsäkring logga in </h1>
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