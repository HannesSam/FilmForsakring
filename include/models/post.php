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

    public static function getPosts()
    {
        $sql = "SELECT userID, title, review, stars FROM reviews";
        $result = Database::queryDb($sql);
        return $result;
    }
}
