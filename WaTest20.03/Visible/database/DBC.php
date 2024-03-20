<?php

class DBC
{
    private const HOST = "127.0.0.1:3306";
    private const USER = "root";
    private const PASSWORD = "student";
    private const DATABASE = "uzivatele";

    private static $connection;

    protected function __construct()
    {
    }

    public static function getConnection(): ?PDO
    {
        if (!self::$connection) {
            try {
                self::$connection = new PDO(
                    'mysql:host=' . self::HOST . ';dbname=' . self::DATABASE,
                    self::USER,
                    self::PASSWORD
                );
            } catch (PDOException $e) {
                throw new PDOException($e->getMessage(), $e->getCode());
            }
        }
        return self::$connection;
    }
}
