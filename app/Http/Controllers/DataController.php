<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class DataController extends Controller
{
    public function postRequest()
    {
        $client = new Client();
        try {
            $response = $client->request('POST', 'https://dory.karam.app/api/post');
        } catch (RequestException $e) {
            $response=  $e->getResponse();
        }
        return $response;
    }

    public function getRequest()
    {
        $client = new Client();

        try {
            $response = $client->request('GET', 'https://dory.karam.app/api/test');
        } catch (RequestException $e) {
             $response=  $e->getResponse();
        }
        return $response;
    }
}
