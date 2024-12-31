<?php

namespace App\Config;

use PDO;

class Database
{
  public static function connect()
  {
    try {
      return new PDO(
        "mysql:host=localhost;dbname=force_catalog;charset=utf8mb4",
        "root",
        "Bolo-123",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
      );
    } catch (\PDOException $e) {
      die("Erro na conexão: " . $e->getMessage());
    }
  }
}
