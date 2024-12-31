<?php

namespace App\Models;

use PDO;

class LogModel
{
  private $db;

  public function __construct($db)
  {
    $this->db = $db;
  }

  public function saveLog($method, $endpoint)
  {
    $stmt = $this->db->prepare("INSERT INTO api_logs (request_method, endpoint) VALUES (:method, :endpoint)");
    $stmt->bindParam(':method', $method);
    $stmt->bindParam(':endpoint', $endpoint);
    $stmt->execute();
  }
}
