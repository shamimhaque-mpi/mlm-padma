<?php

namespace App\Http\Controllers\backend\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatementController extends Controller
{
    public function __construct(){

    }

    public function generationIncome()
    {
    	return view('backend.user.statement.generation_income');
    }

    public function incentive()
    {
    	return view('backend.user.statement.incentive');
    }

    public function salary()
    {
    	return view('backend.user.statement.salary');
    }

    public function reyality()
    {
    	return view('backend.user.statement.reyality');
    }

    public function tour()
    {
    	return view('backend.user.statement.tour');
    }

}
