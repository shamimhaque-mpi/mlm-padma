<?php

namespace App\Http\Controllers\backend\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function __construct(){

    }

    public function transformE()
    {
    	return view('backend.user.wallet_transaction.transaction_to_e');
    }

    public function transformD()
    {
    	return view('backend.user.wallet_transaction.transaction_to_d');
    } 
    
    public function dWalletReport()
    {
    	return view('backend.user.wallet_transaction.d_wallet_report');
    }

    public function eWalletReport()
    {
    	return view('backend.user.wallet_transaction.e_wallet_report');
    }
}
