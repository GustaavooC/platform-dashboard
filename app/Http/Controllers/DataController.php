<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function sendDataToPython(Request $request)
{
    $client = new Client();
    $response = $client->post('http://localhost:5000/process-data', [
        'json' => $request->all()
    ]);

    return response()->json(json_decode($response->getBody()->getContents()));
}
}