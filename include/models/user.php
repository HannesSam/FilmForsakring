<?php
class User
{
    public static function addUser($email, $password)
    {

        if (CheckInput::valdiateNotEmpty($email, $password) && CheckInput::validateEmail($email) && self::checkIfExists($email) == false) {
            $salt = Authorizer::getSalt();
            $hash = Authorizer::createHash($password, $salt);
            $email = Database::escapeString($email);
            $salt1 = Database::escapeString($salt);
            $sql = "INSERT INTO users (email, hash, salt) VALUES ('$email', '$hash', '$salt')";

            if (Database::insertToDb($sql)) {
                echo "User added";
            } else {
                echo "Error when adding user";
            }
        } else {
            echo "E-mail already in use, please login";
        }
    }

    public static function checkIfExists($email)
    {
        $email = Database::escapeString($email);
        $sql = "SELECT 1 FROM users WHERE email = '$email'";
        $result = Database::queryDb($sql);
        if (mysqli_num_rows($result) == 0) {
            return false;
        } else {
            return true;
        }
    }

    public static function logIn($email, $password)
    {
        session_start();
        $email = Database::escapeString($email);
        $sql = "SELECT userID, hash, salt, admin FROM users WHERE email = '$email'";
        $result = Database::queryDb($sql);
        $user = $result->fetch_assoc();
        $hash = $user["hash"];
        $salt = $user["salt"];
        $admin = $user["admin"];

        if($admin == 1){

            $_SESSION["admin"] = $user["admin"];
        }
        
        if (Authorizer::authenticateUser($password, $hash, $salt)) {
            
            $_SESSION["userID"] = $user["userID"];
            echo "User logged in";
        } else {
            echo "Not valid password/email";
        }
    }
    public static function getUserName($userID)
    {
        $userID = Database::escapeString($userID);
        $sql = "SELECT email FROM users WHERE userID = '$userID'";
        $result = Database::queryDb($sql);
        $user = $result->fetch_assoc();
        return ($user);
    }
}
