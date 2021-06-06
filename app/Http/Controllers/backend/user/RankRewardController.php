<?php

namespace App\Http\Controllers\backend\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RankRewardController extends Controller
{
    public function __construct(){

    }

    public function index(){
    	return view('backend.user.rank_reward.index');
    }
}
