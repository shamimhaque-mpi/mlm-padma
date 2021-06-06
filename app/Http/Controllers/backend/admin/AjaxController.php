<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');

    }


    public function result(Request $request)
    {

        $table  = (!empty($request->table) ? $request->table : null);
        $select = (!empty($request->select) ? $request->select : '*');
        $where  = (!empty($request->where) ? $request->where : null);

        $result = null;

        if (!empty($table)) {

            if (!empty($where)){
                $result = DB::table($table)->select($select)->where($where)->get();
            }else{
                $result = DB::table($table)->select($select)->get();
            }
        }

        return json_encode($result);
    }


    public function join(Request $request)
    {


        return json_encode('ok');
    }
}
