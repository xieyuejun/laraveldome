<?php

namespace App\Http\Controllers;


class UserController extends Controller
{
    
    //方法
    public function showProfile()
    {
    	$url = route('profile');
    	echo $url;
    }
}
