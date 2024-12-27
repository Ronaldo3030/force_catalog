<?php

namespace App\Controllers;

use App\Controller;

class ApiController extends Controller
{
  public function fetchData()
  {
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

    //CRIAR ALGO PARA FILTRAR POR DATA...
    usort($data['result'], function ($a, $b) {
      $dateA = $a['properties']['release_date'] ?? '';
      $dateB = $b['properties']['release_date'] ?? '';
    });

    header('Content-Type: application/json');
    echo json_encode($data['result']);
  }
}
