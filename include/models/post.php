<?php
class Post
{

    public static function addPost($userID, $header, $text)
    {
        //injection attacks?
        if (CheckInput::valdiateNotEmpty($header, $text)) {
            $header = Database::escapeString($header);
            $text = Database::escapeString($text);
            $sql = "INSERT INTO posts (userID, header, text) VALUES ('$userID', '$header', '$text')";
            if (Database::insertToDb($sql)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public static function getPosts()
    {
        //injection attacks?
        //where xxx och standardvärdet returnerar alla så man kan söka
        $sql = "SELECT userID, header, text FROM posts";
        $result = Database::queryDb($sql);
        return $result;
    }
}
