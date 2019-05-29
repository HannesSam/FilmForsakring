<?php
require 'include/bootstrap.php';
$result = Post::getPosts();
while ($row = $result->fetch_assoc()) {
    $userID = $row["userID"];
    $email =  User::getUserName($email);
    echo '<div class="postsDiv">
        <div class="postContainer">
        <h2 class="posts header">' . $row["title"] . '</h2> <br> <br> 
        <p class="posts userName">  <strong> Author: </strong> <i>' . $email['email'] . '</i> </p> <br>
        <p class="posts text"> <i class="fas fa-terminal"></i>  '
        . $row["review"] . '</p> </div> </div>';
}
