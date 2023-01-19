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
        if (session()->has('username')) {
            return redirect()->back();
        } else {
            $responsesGenre = $this->apiRepository->genreList();
            return view('front.login', compact('responsesGenre'));
        }
    }

    public function checkLogin(Request $request)
    {
        if (session()->has('username')) {
            return redirect()->back();
        } else {
            $request->validate([
                'username' => 'required',
                'password' => 'required',
            ], [
                'username.required' => '*Phone no required.',
                'password.required' => '*Password required.',
            ]);

            $responses = $this->apiRepository->checkLogin($request->username, $request->password);
            if ($responses['result'] == 'success') {
                $request->session()->put('username', $request['username']);
                $request->session()->put('role', $request['role']);
                $request->session()->put('level', $request['level']);
                $request->session()->put('userid', $request['userid']);
                $request->session()->put('fullname', $request['fullname']);
                return redirect('/');
            } else {
                $request->session()->flash('authentication', 'Login failed!');
                return redirect()->back();
            }
        }

        // dd($responses);
    }

    public function logout()
    {
        session()->pull('username');
        session()->pull('role');
        session()->pull('level');
        session()->pull('userid');
        session()->pull('fullname');
        return redirect('/');
    }
}
