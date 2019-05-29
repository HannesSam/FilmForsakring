<?php
require 'include/bootstrap.php';

if (!isset($_POST["title"])) {
    header("location: index.php");
}
session_start();
$title = $_POST["title"];
$review = $_POST["review"];
$stars = $_POST["stars"];
$userID = $_SESSION["userID"];
Post::addPost($userID, $title, $review, $stars);
