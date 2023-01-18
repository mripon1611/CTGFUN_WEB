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

    public function showAll($cat_type)
    {
        $client = new Client(['base_uri' => 'http://103.121.39.254/ctgfun/']);

        $response = $client->request('POST', 'api/getCategoryPaging', ['form_params' => [
            'ct' => $cat_type,
            'page' => '1'
        ]]);

        return json_decode($response->getBody(), true);
    }

    public function genreList()
    {
        $client = new Client(['base_uri' => 'http://103.121.39.254/ctgfun/']);

        $response = $client->request('POST', 'api/getGenreList', ['form_params' => []]);

        return json_decode($response->getBody(), true);
    }

    public function contenDetails($content_id, $user_id = '')
    {
        $client = new Client(['base_uri' => 'http://103.121.39.254/ctgfun/']);

        $response = $client->request('POST', 'api/getContentDetails', ['form_params' => [
            'username' => $user_id,
            'contentid' => $content_id,
        ]]);

        return json_decode($response->getBody(), true);
    }
}
