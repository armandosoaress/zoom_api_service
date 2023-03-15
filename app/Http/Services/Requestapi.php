<?php

namespace App\Http\Services;

use App\Http\Controllers\Controller;

/**
 * Summary of MainController
 */
class requestapi extends Controller
{
    /**
     * Summary of request
     * @param mixed $data
     * @return mixed
     */
    public function request(array $data)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request($data['method'],  $data['url'], [
            'headers' => $data['headers'],
            'json' => $data['json']
        ]);
        $data = json_decode($response->getBody(), true);
        return response()->json($data);
    }
}
