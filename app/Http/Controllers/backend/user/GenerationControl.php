<?php

namespace App\Http\Controllers\backend\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class GenerationControl extends Controller
{
        public function generate($user_id){
        $tree = [];
        $gen1st = User::where('refer_id', $user_id)->select('user_id', 'name', 'refer_id', 'id')->get();
        foreach ($gen1st as $key => $firstCli) {
            // First Generation
            $tree['gn1'][$key]['name']      = $firstCli->name;
            $tree['gn1'][$key]['user_id']   = $firstCli->user_id;
            $tree['gn1'][$key]['refer_id']  = $firstCli->refer_id;
            $tree['gn1'][$key]['id']        = $firstCli->id;

            // Second Generation
            $gen2st = User::where('refer_id', $firstCli->user_id)->select('user_id', 'name', 'refer_id', 'id')->get();
            foreach ($gen2st as $key2 => $secondCli) {
                $tree['gn1'][$key]['gn2'][$key2]['name']       = $secondCli->name; 
                $tree['gn1'][$key]['gn2'][$key2]['user_id']    = $secondCli->user_id; 
                $tree['gn1'][$key]['gn2'][$key2]['refer_id']   = $secondCli->refer_id; 
                $tree['gn1'][$key]['gn2'][$key2]['id']         = $secondCli->id; 

                // Therd Generation
                $gen3rd = User::where('refer_id', $secondCli->user_id)->select('user_id', 'name', 'refer_id', 'id')->get();
                foreach ($gen3rd as $key3 => $therdCli) {
                    $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['name']        = $therdCli->name; 
                    $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['user_id']     = $therdCli->user_id; 
                    $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['refer_id']    = $therdCli->refer_id; 
                    $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['id']          = $therdCli->id; 

                    // Fourth Generation
                    $gen4th = User::where('refer_id', $therdCli->user_id)->select('user_id', 'name', 'refer_id', 'id')->get();
                    foreach ($gen4th as $key4 => $fourthCli) {
                        $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['name']        = $fourthCli->name; 
                        $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['user_id']     = $fourthCli->user_id; 
                        $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['refer_id']    = $fourthCli->refer_id; 
                        $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['id']          = $fourthCli->id; 

                        // Fifth Generation
                        $gen5th = User::where('refer_id', $fourthCli->user_id)->select('user_id', 'name', 'refer_id', 'id')->get();
                        foreach ($gen5th as $key5 => $fithCli) {
                            $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['name']        = $fithCli->name; 
                            $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['user_id']     = $fithCli->user_id; 
                            $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['refer_id']    = $fithCli->refer_id; 
                            $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['id']          = $fithCli->id; 

                            // sixth Generation
                            $gen6th = User::where('refer_id', $fithCli->user_id)->select('user_id', 'name', 'refer_id', 'id')->get();
                            foreach ($gen6th as $key6 => $sixthCli) {
                                $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['name']        = $sixthCli->name; 
                                $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['user_id']     = $sixthCli->user_id; 
                                $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['refer_id']    = $sixthCli->refer_id; 
                                $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['id']          = $sixthCli->id; 

                                // seventh Generation
                                $gen7th = User::where('refer_id', $sixthCli->user_id)->select('user_id', 'name', 'refer_id', 'id')->get();
                                foreach ($gen7th as $key7 => $seventhCli) {
                                    $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['gn7'][$key7]['name']        = $seventhCli->name; 
                                    $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['gn7'][$key7]['user_id']     = $seventhCli->user_id; 
                                    $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['gn7'][$key7]['refer_id']    = $seventhCli->refer_id; 
                                    $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['gn7'][$key7]['id']          = $seventhCli->id; 

                                    // eighth Generation
                                    $gen8th = User::where('refer_id', $seventhCli->user_id)->select('user_id', 'name', 'refer_id', 'id')->get();
                                    foreach ($gen8th as $key8 => $eighthCli) {
                                        $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['gn7'][$key7]['gn8'][$key8]['name']        = $eighthCli->name; 
                                        $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['gn7'][$key7]['gn8'][$key8]['user_id']     = $eighthCli->user_id; 
                                        $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['gn7'][$key7]['gn8'][$key8]['refer_id']    = $eighthCli->refer_id; 
                                        $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['gn7'][$key7]['gn8'][$key8]['id']          = $eighthCli->id; 

                                        // ninth Generation
                                        $gen9th = User::where('refer_id', $eighthCli->user_id)->select('user_id', 'name', 'refer_id', 'id')->get();
                                        foreach ($gen9th as $key9 => $ninthCli) {
                                            $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['gn7'][$key7]['gn8'][$key8]['gn9'][$key9]['name']        = $ninthCli->name; 
                                            $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['gn7'][$key7]['gn8'][$key8]['gn9'][$key9]['user_id']     = $ninthCli->user_id; 
                                            $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['gn7'][$key7]['gn8'][$key8]['gn9'][$key9]['refer_id']    = $ninthCli->refer_id; 
                                            $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['gn7'][$key7]['gn8'][$key8]['gn9'][$key9]['id']          = $ninthCli->id; 

                                            // tenth Generation
                                            $gen10th = User::where('refer_id', $ninthCli->user_id)->select('user_id', 'name', 'refer_id', 'id')->get();
                                            foreach ($gen10th as $key10 => $tenththCli) {
                                                $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['gn7'][$key7]['gn8'][$key8]['gn9'][$key9]['gn10'][$key10]['name']        = $tenththCli->name; 
                                                $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['gn7'][$key7]['gn8'][$key8]['gn9'][$key9]['gn10'][$key10]['user_id']     = $tenththCli->user_id; 
                                                $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['gn7'][$key7]['gn8'][$key8]['gn9'][$key9]['gn10'][$key10]['refer_id']    = $tenththCli->refer_id; 
                                                $tree['gn1'][$key]['gn2'][$key2]['gn3'][$key3]['gn4'][$key4]['gn5'][$key5]['gn6'][$key6]['gn7'][$key7]['gn8'][$key8]['gn9'][$key9]['gn10'][$key10]['id']          = $tenththCli->id; 
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        // Eng Generation tree
        return $tree;
    }
}
