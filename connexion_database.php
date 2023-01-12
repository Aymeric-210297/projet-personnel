<?php
require_once("dotenv.php");
(new DotEnv(__DIR__ . "/.env"))->load();

try {
    $dbh = new PDO(getenv("DATABASE_DSN"), getenv("DATABASE_USER"), getenv("DATABASE_PASS"), [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch(PDOException $e) {
    die("Une erreur est survenue: " . $e->getMessage());
}