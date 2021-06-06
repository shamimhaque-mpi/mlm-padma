<?php

namespace App\Http\Controllers\backend\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function __construct(){
    	$this->middleware('auth:user');
    }

    public function index(){

    }

    public function stockistPoint()
    {
    	return view('backend.user.withdraw.stockist_point'); 
    }

    public function stockist()
    {
    	return view('backend.user.withdraw.stockist'); 
    }

    public function company()
    {
    	return view('backend.user.withdraw.company'); 
    }
}
