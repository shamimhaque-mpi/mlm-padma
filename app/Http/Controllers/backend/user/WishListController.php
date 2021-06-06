<?php

namespace App\Http\Controllers\backend\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function __construct(){
    	$this->middleware('auth:user');
    }

    public function index(){
    	return view('backend.user.wish_list');
    }
}
