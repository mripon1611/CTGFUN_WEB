<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\apiRepositoryInterface;
use RealRashid\SweetAlert\Facades\Alert;

class MyFavoriteController extends Controller
{
    //
    protected $apiRepository;
    public function __construct(apiRepositoryInterface $apiRepository)
    {
        $this->apiRepository = $apiRepository;
    }

    public function index()
    {
        if (session()->has('username')) {
            $user_id = session()->get('username');
            $responses = $this->apiRepository->myFavouriteList($user_id);
            $responsesGenre = $this->apiRepository->genreList();

            // dd($responses);
            return view('front.my-favorite', compact('responses', 'responsesGenre'));
        } else {
            return redirect('login');
        }
    }

    public function addOrRemoveFav(Request $request)
    {
        // return $request->infav;
        $username = session()->get('username');
        $movieid = $request->movieid;
        if ($request->infav == 1) {
            $responses = $this->apiRepository->addFavorite($username, $movieid);
            Alert::success('Success', $responses['response']);
            return $responses;
        } else if ($request->infav == 0) {
            $responses = $this->apiRepository->removeFavorite($username, $movieid);
            return $responses;
        }
    }
}
