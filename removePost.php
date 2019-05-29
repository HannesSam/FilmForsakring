<?php
include 'include/bootstrap.php';

$postID = $_POST["postID"];

Post::removePost($postID);
