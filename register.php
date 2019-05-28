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
        <h1> Filmförsäkring  registrera dig nu! </h1> 
        </div> 
<div class="box-1"> 
    <form action="registerDB.php" method="get"> 
        Email: <br> 
        <input type="text" placeholder="fyll i din email.." ><br> 
        <br>   
        Lösenord: <br> 
        <input type="text" placeholder="fyll i ett lösenord.." > <br>
        <br>  
        Upprepa Lösenord: <br> 
        <input type="text" placeholder="fyll i lösenordet igen.." > <br>
        <br> 
        <input type="submit" class="button" value="Submit">
        <footer>
        <div class="footer">
            <h2> FilmFörsäkring AB </h2>
            <h3> since 2019 </h3>
        </div>
    </footer>
</form> 
</div> 


</html> 