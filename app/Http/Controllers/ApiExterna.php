<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client; 

class ApiExterna extends Controller
{
    protected $httpClient;

    public function __construct(Client $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getData()
    {
        // Realiza una solicitud GET a la API externa
        $response = $this->httpClient->get('https://randomuser.me/api/');

        // Decodifica y devuelve los datos de la respuesta
        return json_decode($response->getBody(), true);
    }
}
