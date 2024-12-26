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
      echo 'Erro cURL: ' . curl_error($ch);
    }
    curl_close($ch);
    $data = json_decode($response, true);
    header('Content-Type: application/json');
    echo json_encode($data);
  }
}
