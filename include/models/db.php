<?php
class Database
{
    private static $conn;

    /* JESPERS new mysqli('localhost', 'root', '', 'filmforsakring'); */
     /* ALLA ANDRAS new mysqli('localhost', 'root', 'root', 'filmforsakring', '3306'); */

    private static function connect()
    {
        self::$conn = new mysqli('localhost', 'root', 'root', 'filmforsakring');
        if (self::$conn->connect_error) {
            die("Connection failed: " . self::$conn->connect_error);
        }
    }
    private static function disconnect()
    {
        self::$conn->close();
    }
    public static function queryDb($sql)
    {
        self::connect();
        $result = self::$conn->query($sql);
        self::disconnect();
        return $result;
    }
    public static function insertToDb($sql)
    {
        self::connect();
        if (self::$conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
        self::disconnect();
    }
    public static function escapeString($string)
    {
        self::connect();
        $string = self::$conn->real_escape_string($string);
        self::disconnect();
        return $string;
    }
}
