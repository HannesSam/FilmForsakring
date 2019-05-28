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
        <h1> Filmförsäkring registrera dig nu! </h1>
    </div>
    <div class="box-1" id="registerDiv">
        <form>
            <label for="emailRegister">Email:</label> <br>
            <input id="emailRegister" type="text" placeholder="fyll i din email.."><br>
            <br>
            <label for="passwordRegister">Lösenord:</label> <br>
            <input id="passwordRegister" type="text" placeholder="fyll i ett lösenord.."> <br>
            <br>
            <label for="repeatRegister">Upprepa Lösenord:</label> <br>
            <input id="repeatRegister" type="text" placeholder="fyll i lösenordet igen.."> <br>
            <br>
            <input id="sumbitRegister" type="button" class="button" value="Registrera">
    </div>
    <footer>
        <div class="footer">
            <h2> FilmFörsäkring AB </h2>
            <h3> since 2019 </h3>

    </footer>
    </form>
    </div>
</body>

</html>