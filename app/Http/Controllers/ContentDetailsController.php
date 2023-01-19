<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\apiRepositoryInterface;

class ContentDetailsController extends Controller
{
    //
    protected $apiRepository;
    public function __construct(apiRepositoryInterface $apiRepository)
    {
        $this->apiRepository = $apiRepository;
    }

    public function index($content_id)
    {
        if (session()->has('username')) {
            $user_id = session()->get('username');
            $responses = $this->apiRepository->contenDetails($content_id, $user_id);
            $responsesGenre = $this->apiRepository->genreList();

            // dd($responses);
            return view('front.content-details', compact('responses', 'responsesGenre'));
        } else {
            return redirect('login');
        }
    }
}
