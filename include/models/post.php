<?php
class Post
{

    public static function addPost($userID, $title, $review, $stars)
    {
        if (CheckInput::valdiateNotEmpty($title, $review)) {
            $header = Database::escapeString($title);
            $text = Database::escapeString($review);
            $sql = "INSERT INTO reviews (userID, movieTitle, review, stars) VALUES ('$userID', '$title', '$review', '$stars')";
            if (Database::insertToDb($sql)) {
                echo "Review added!";
                return;
            } else {
                echo "Error when adding Review to database";
                return;
            }
        } else {
            echo "Please input all values";
            return;
        }
        echo "Nått gick fel";
    }

    public static function getPosts($title)
    {
        $sql = "SELECT userID, movieTitle, review, stars FROM reviews WHERE movieTitle = '$title'";
        $result = Database::queryDb($sql);
        return $result;
    }
    
    public static function removePost($postID)
    {
        $sql = "DELETE FROM reviews WHERE  reviewID ='$postID';";
        $result = Database::queryDb($sql);
        return $result;
    }
}
