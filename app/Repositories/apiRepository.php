<?php

namespace App\Repositories;

use App\Interfaces\apiRepositoryInterface;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class apiRepository implements apiRepositoryInterface
{
    public function homeAPI()
    {
        $client = new Client(['base_uri' => 'http://103.121.39.254/ctgfun/']);

        $response = $client->request('POST', 'api/getHomeContents', ['form_params' => [
            'view' => 'home',
            'username' => ''
        ]]);

        return json_decode($response->getBody(), true);
    }
}
