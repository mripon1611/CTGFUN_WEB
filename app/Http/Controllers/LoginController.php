<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\apiRepositoryInterface;

class LoginController extends Controller
{
    protected $apiRepository;
    public function __construct(apiRepositoryInterface $apiRepository)
    {
        $this->apiRepository = $apiRepository;
    }
    public function index()
    {
        $responsesGenre = $this->apiRepository->genreList();
        return view('front.login', compact('responsesGenre'));
    }
}
