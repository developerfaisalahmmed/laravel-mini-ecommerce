<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class UserProfileController extends Controller
{
    public function index(){
//        return 'profile';
        return view('frontend.user.profile');
    }
}
