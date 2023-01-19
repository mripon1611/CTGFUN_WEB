<?php

namespace App\Interfaces;

interface apiRepositoryInterface
{
    public function homeAPI();
    public function genreList();
    public function showAll($cat_type);
    public function contenDetails($content_id, $user_id = '');
    public function checkLogin($user_id = '', $password = '');
    public function myFavouriteList($user_id = '');
    public function addFavorite($username, $movieid);
    public function removeFavorite($username, $movieid);
}
