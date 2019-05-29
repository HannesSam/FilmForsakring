<?php
require 'include/bootstrap.php';

$title = $_POST["title"];;
$result = Post::getPosts($title);
while ($row = $result->fetch_assoc()) {
    $userID = $row["userID"];
    $email =  User::getUserName($userID);
    echo '<div class="popUp2"">
        <div class="reviewContainer">

        '<p>' . $row["stars"] . '</p>' . 

        '<p class="review">'
        . $row["review"] . 
        '</p> <br>

        <p class="email">  
        Skrivet av: ' . $email['email'] . 
        '</p> <br>

        </div> </div>';
}
