<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\apiRepositoryInterface;

class ShowAllController extends Controller
{
    //
    protected $apiRepository;
    public function __construct(apiRepositoryInterface $apiRepository)
    {
        $this->apiRepository = $apiRepository;
    }

    public function index($cat_type)
    {
        $responses = $this->apiRepository->showAll($cat_type);
        $responsesGenre = $this->apiRepository->genreList();

        // dd($responses);
        return view('front.show-all', compact('responses', 'responsesGenre'));
    }
}
