<?php
require 'include/bootstrap.php';

$title = $_POST["title"];;
$result = Post::getPosts($title);
while ($row = $result->fetch_assoc()) {
    $userID = $row["userID"];
    $email =  User::getUserName($userID);
    echo '<div class="popUp"">
        <div class="reviewContainer">
        <h2 class="title">' . $row["movieTitle"] . '</h2> <br> <br>' .
        '<p>' . $row["stars"] . '</p>' .
        '<p class="email">  Author:' . $email['email'] . '</p> <br>
        <p class="review">'
        . $row["review"] . '</p> </div> </div>';
}
