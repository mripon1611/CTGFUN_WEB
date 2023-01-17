<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\apiRepositoryInterface;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    protected $apiRepository;
    public function __construct(apiRepositoryInterface $apiRepository)
    {
        $this->apiRepository = $apiRepository;
    }

    public function index()
    {
        $responses = $this->apiRepository->homeAPI();

        // dd($responses);
        return view('front.home', compact('responses'));
    }
}
