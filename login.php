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
        <a href="index.php">Home</a>
        <a class="active" href="login.php">Log in</a>
        <a href="register.php">Register</a>
        <a href="forum.php">Forum</a>
        <a href="loggout.php">Log out</a>
<br> 
<br>
<br> 
<br>
        <div class="title"> 
        <h1> Filmförsäkring  log in </h1> 
        </div> 
<div class="box-1"> 
    <form action="loginDB.php" method="get"> 
        Email: <br> 
        <input type="text" placeholder="fyll i din email.." ><br> 
        <br>   
        Lösenord: <br> 
        <input type="text" placeholder="fyll i ditt lösenord.." > <br>
        <br>  
        <input type="submit" class="button" value="Submit">
</form> 
</div> 


</html> 