<?php
class User
{
    public static function addUser($userName, $email, $password)
    {

        if (CheckInput::valdiateNotEmpty($userName, $email, $password) && CheckInput::validateEmail($email) && self::checkIfExists($email)) {
            $salt1 = Authorizer::getSalt();
            $salt2 = Authorizer::getSalt();
            $hash = Authorizer::createHash($password, $salt1, $salt2);
            $userName = Database::escapeString($userName);
            $email = Database::escapeString($email);
            $salt1 = Database::escapeString($salt1);
            $salt2 = Database::escapeString($salt2);
            $sql = "INSERT INTO users (userName, email, hash, salt1, salt2) VALUES ('$userName', '$email', '$hash', '$salt1', '$salt2')";

            if (Database::insertToDb($sql)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public static function checkIfExists($email)
    {
        $email = Database::escapeString($email);
        $sql = "SELECT 1 FROM users WHERE email = '$email'";
        $result = Database::queryDb($sql);
        $user = $result->fetch_assoc();
        if ($user == null) {
            return true;
        } else {
            return false;
        }
    }
    public static function logIn($email, $password)
    {
        $email = Database::escapeString($email);
        $sql = "SELECT userID, hash, salt1, salt2 FROM users WHERE email = '$email'";
        $result = Database::queryDb($sql);
        $user = $result->fetch_assoc();
        $hash = $user["hash"];
        $salt1 = $user["salt1"];
        $salt2 = $user["salt2"];
        if (Authorizer::authenticateUser($password, $hash, $salt1, $salt2)) {
            session_start();
            $_SESSION["userID"] = $user["userID"];
            return true;
        } else {
            return false;
        }
    }
    public static function getUserName($userID)
    {
        $userID = Database::escapeString($userID);
        $sql = "SELECT userName FROM users WHERE userID = '$userID'";
        $result = Database::queryDb($sql);
        $user = $result->fetch_assoc();
        return ($user);
    }
}
