<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Classes\CommonFunction;
use App\Classes\PagingFunction;
use App\Admin;
use App\User;
use Auth;
use DB;
use App\Classes\jsonRPCClient;

class Front extends Controller

{
    
    public function main(Request $request){
        
        $return_list = array();

        return view('index', $return_list);
    }
    public function detail(Request $request){
        
        $return_list = array();

        return view('/sub/detail', $return_list);
    }
    public function greeting(Request $request){
        
        $return_list = array();

        return view('/sub/greeting', $return_list);
    }
    
    public function product_list(Request $request){
        
        $return_list = array();

        return view('/sub/product_list', $return_list);
    }
    public function product_view(Request $request){
        
        $return_list = array();

        return view('/sub/product_view', $return_list);
    }


    public function board_list(Request $request){
        
        $return_list = array();

        return view('/board_list', $return_list);
    }


    public function board_view(Request $request){
        
        $return_list = array();

        return view('/board_view', $return_list);
    }

    public function cutomer(Request $request){
        
        $view_url = '';
        
        if($request->segment(2) == 'manual'){
            $view_url .= '/cutomer/manual';
        }
        if($request->segment(2) == 'as'){
            $view_url .= '/cutomer/as';
        }
        $return_list = array();
        return view('sub/'.$view_url, $return_list);
    }
   
}
?>