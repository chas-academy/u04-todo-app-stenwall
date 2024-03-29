<?php
include (__DIR__ . '/autoloader.php');

use App\Utils\Config;

function connectDB()
{
    $config = Config::getInstance();
    $dbconfig = $config->get('db');
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    try {
        $pdo = new PDO(
            $dbconfig['dsn'],
            $dbconfig['user'],
            $dbconfig['password'],
            $options
        );
        return $pdo;
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), $e->getCode());
    }
}

?>
