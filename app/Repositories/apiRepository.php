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

    public function checkLogin($user_id = '', $password = '')
    {
        $client = new Client(['base_uri' => 'http://103.121.39.254/ctgfun/']);

        $response = $client->request('POST', 'api/login', ['form_params' => [
            'username' => $user_id,
            'password' => $password,
        ]]);

        return json_decode($response->getBody(), true);
    }
    public function myFavouriteList($user_id = '')
    {
        $client = new Client(['base_uri' => 'http://103.121.39.254/ctgfun/']);

        $response = $client->request('POST', 'api/getFavouriteList', ['form_params' => [
            'username' => $user_id,
            'page' => 1,
        ]]);

        return json_decode($response->getBody(), true);
    }

    public function addFavorite($username, $movieid)
    {
        $client = new Client(['base_uri' => 'http://103.121.39.254/ctgfun/']);

        $response = $client->request('POST', 'api/setFavouriteAdd', ['form_params' => [
            'username' => $username,
            'movieid' => $movieid,
        ]]);

        return json_decode($response->getBody(), true);
    }
    public function removeFavorite($username, $movieid)
    {
        $client = new Client(['base_uri' => 'http://103.121.39.254/ctgfun/']);

        $response = $client->request('POST', 'api/setFavouriteRemove', ['form_params' => [
            'username' => $username,
            'movieid' => $movieid,
        ]]);

        return json_decode($response->getBody(), true);
    }
}
