<?php
class Authorizer
{

    public static function createHash($password, $salt)
    {
        $hash = md5($salt . $password);
        return $hash;
    }

    public static function authenticateUser($password, $hash1, $salt)
    {
        $hash2 = md5($salt . $password);
        if ($hash1 === $hash2) {
            return true;
        } else {
            return false;
        }
    }

    public static function getSalt()
    {
        $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randStringLen = 15;

        $randString = "";
        for ($i = 0; $i < $randStringLen; $i++) {
            $randString .= $charset[mt_rand(0, strlen($charset) - 1)];
        }

        return $randString;
    }
}
