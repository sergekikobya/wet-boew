<?php
namespace App\Core;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $pdo = null;

    public static function getConnection(array $config): PDO
    {
        if (self::$pdo instanceof PDO) {
            return self::$pdo;
        }

        $dsn = $config['db']['dsn'] ?? '';
        $user = $config['db']['user'] ?? '';
        $pass = $config['db']['pass'] ?? '';
        $options = $config['db']['options'] ?? [];

        try {
            self::$pdo = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            http_response_code(500);
            echo 'Database connection failed.';
            exit;
        }

        return self::$pdo;
    }
}

