<?php

namespace App\Controllers;

use App\Models\LogModel;
use App\Config\Database;
use App\Controller;
use DateTime;

class ApiController extends Controller
{
  private $logModel;

  public function __construct()
  {
    $db = Database::connect();
    $this->logModel = new LogModel($db);
  }

  public function fetchDataFilm()
  {
    $this->logModel->saveLog($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
    $apiUrl = "https://www.swapi.tech/api/films";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
      echo 'ERROR cURL: ' . curl_error($ch);
      curl_close($ch);
      return;
    }
    curl_close($ch);

    $data = json_decode($response, true);

    if ($data === null) {
      echo 'Erro ao decodificar o JSON.';
      return;
    }

    if (!isset($data['result'])) {
      echo 'Dados não encontrados no resultado.';
      return;
    }

    echo "CHEGOU";
    exit;

    //CRIAR ALGO PARA FILTRAR POR DATA...
    usort($data['result'], function ($a, $b) {
      $dateA = $a['properties']['release_date'] ?? '';
      $dateB = $b['properties']['release_date'] ?? '';
    });

    header('Content-Type: application/json');
    echo json_encode($data['result']);
  }

  public function fetchDataIdFilm($id)
  {
    if (!isset($id) || !intval($id)) {
      echo "ID inválido ou não fornecido.";
      exit;
    }

    $apiUrl = "https://www.swapi.tech/api/films/{$id}";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
      echo 'ERROR cURL: ' . curl_error($ch);
      curl_close($ch);
      return;
    }
    curl_close($ch);

    $data = json_decode($response, true);

    if ($data === null) {
      echo 'Erro ao decodificar o JSON.';
      return;
    }

    if (!isset($data['result'])) {
      echo 'Dados não encontrados no resultado.';
      return;
    }

    $movieDate = new DateTime($data['result']['properties']['release_date']);
    $currentDate = new DateTime();
    $difference = $movieDate->diff($currentDate);
    $age = [
      'years' => $difference->y,
      'months' => $difference->m,
      'days' => $difference->d
    ];

    $data['result']['properties']['age'] = $age;

    header('Content-Type: application/json');
    echo json_encode($data['result']);
  }

  public function fetchDataIdCharacters($id)
  {
    if (!isset($id) || !intval($id)) {
      echo "ID inválido ou não fornecido.";
      exit;
    }

    $apiUrl = "https://www.swapi.tech/api/people/{$id}";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
      echo 'ERROR cURL: ' . curl_error($ch);
      curl_close($ch);
      return;
    }
    curl_close($ch);

    $data = json_decode($response, true);

    if ($data === null) {
      echo 'Erro ao decodificar o JSON.';
      return;
    }

    if (!isset($data['result'])) {
      echo 'Dados não encontrados no resultado.';
      return;
    }

    header('Content-Type: application/json');
    return json_encode($data['result']);
  }
}
