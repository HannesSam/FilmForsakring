<?php
require 'include/bootstrap.php';
$result = Post::getPosts();
while ($row = $result->fetch_assoc()) {
    $userID = $row["userID"];
    $email =  User::getUserName($userID);
    echo '<div class="popUp"">
        <div class="postContainer">
        <h2 class="posts title">' . $row["title"] . '</h2> <br> <br>' .
        $row["stars"] .
        '<p class="posts userName">  <strong> Author: </strong> <i>' . $email['email'] . '</i> </p> <br>
        <p class="posts text">'
        . $row["review"] . '</p> </div> </div>';
}
