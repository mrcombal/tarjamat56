<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct() {
        $this->middleware('admin', ['except' => [
            'getLogin',
            'postLogin'
        ]]);
    }

    public function getIndex() {
        $user = auth()->user();
        return view('admin.index', compact('user'));
    }

    public function getLogin() {
        return view('admin.login-v2');
    }

    public function postLogin(Request $request) {
        $this->validate($request, [
            'email'     =>  'required|min:3|max:254|email',
            'password'  =>  'required'
        ]);

        if(auth()->attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
            return redirect('/admin');
        }

        return redirect()->back()->withErrors('The information you entered are invalid. Please try again.')->withInput();
    }

    public function getLogout() {
        auth()->logout();
        return redirect('admin/login');
    }
}
