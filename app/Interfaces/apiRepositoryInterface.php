<?php

namespace App\Interfaces;

interface apiRepositoryInterface
{
    public function homeAPI();
    public function genreList();
    public function showAll($cat_type);
    public function contenDetails($content_id, $user_id = '');
}
