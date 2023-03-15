<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Getrequest;
use App\Http\Services\Requestapi;
use App\Http\Services\utils\baseurl;
use App\Http\Services\utils\Token;


/**
 * Summary of MainController
 */
class MainController extends Controller
{
    /**
     * Summary of index
     *  @param Getrequest $request
     * @return \Illuminate\Http\JsonResponse
     */

  
    public function token()
    {
        $token = new Token();
        return $token->token();
    }
    public function baseurl()
    {
        $baseurl = new baseurl();
        return $baseurl->baseurl();
    }
    
    public function index()
    {
        $Requestapi = new Requestapi();
        $endpoint = 'meetings';
        $data = [
            'method' => 'GET',
            'url' =>  $this->baseurl()->original['baseendpoint'] . $endpoint,
            'headers' => [
                'Authorization' =>  $this->token()->original['token']
            ],
            'json' => []
        ];
        return $Requestapi->request($data);
    }

    public function store(Getrequest $request)
    {
        $Requestapi = new Requestapi();
        $endpoint = 'meetings';
        $data = [
            'method' => 'Post',
            'url' =>  $this->baseurl()->original['baseendpoint'] . $endpoint,
            'headers' => [
                'Authorization' =>  $this->token()->original['token']
            ],
            'json' => [
                'language' => 'pt-br',
                'auto_approve' => true,
                'start_time' => $request->start_time,
            ]
        ];
        return $Requestapi->request($data);
    }
}
