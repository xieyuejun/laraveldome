<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function __construct()
    {
        //$this->middleware('token');
        //$this->middleware('auth')->only('show');
    }

    
    //方法
    public function showProfile()
    {
    	$url = route('profile');
    	echo $url;
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author LaravelAcademy.org
     */
    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }


}
