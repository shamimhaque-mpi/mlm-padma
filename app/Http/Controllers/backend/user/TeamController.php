<?php

namespace App\Http\Controllers\backend\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Generation;
use App\GenerationRelation;
use App\Http\Controllers\backend\user\GenerationControl as Gn;
use App\Icon;
use App\User;
use Hash, Auth;


class TeamController extends Controller
{
    public function __construct(){
        $this->middleware('auth:user');
    }

    public function index()
    {
    	$allIcons = Icon::select('class_name')->get();
    	return view('backend.user.team.add', compact('allIcons'));
    }

    public function store(Request $request)
    {
    	if($request->isMethod('POST'))
    	{
    		$request->validate([
    			'username'       => 'required|unique:users|min:6',
                'email'          => 'required|unique:users',
    			'password'       => 'required|min:8|same:re_password',
    			're_password'    => 'required|min:8'
    		]);

    		$data = $request->except(['_token', 're_password']);
    		$data['password'] = Hash::make($request->password);
    		$data['refer_id'] = Auth::guard('user')->user()->user_id;
    		$data['user_id']  = $this->id_generate();

    		if($request->image){
    			$path 			= 'public/uploads/user/';
    			$extension  	= $request->image->getClientOriginalExtension();
    			$name 			= time().'.'.$extension;
    			$data['photo']	= $path.$name;
    			$request->image->move($path, $name);
    		}

    		$refer_id = User::create($data)->id;
            $gene_id  = Generation::where('generation_name', '1st')->first()->id;

            GenerationRelation::create([
                'user_id'       => Auth::guard('user')->user()->id,
                'refer_id'      => $refer_id,
                'generation_id' => $gene_id,
            ]);

    		session()->flash('success', 'User Created Successfully...');
    	}
    	return redirect()->route('user.team.all');
    }

    public function all()
    {
    	$where = [
    		['refer_id', '=' , Auth::guard('user')->user()->user_id],
    		['refer_id', '!=', ''],
    		['id',       '!=', Auth::guard('user')->user()->id]
    	];
    	$all_users = User::where($where)->get();
    	return view('backend.user.team.all', compact('all_users'));
    }

    public function view($id)
    {
    	$user = User::where(['id'=>$id])->first();
    	return view('backend.user.team.view', compact('user'));
    }


    public function id_generate($length = 10)
    {
    	return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }

    public function tree()
    {
        $getGene = new Gn();
        $tree = (object)$getGene->generate(Auth::guard('user')->user()->user_id);
        return view('backend.user.team.tree', compact('tree'));
    }


}
