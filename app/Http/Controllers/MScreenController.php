<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\m_screen;
use App\Http\Requests\StoreScreenRequest;
use Auth;

class MScreenController extends Controller
{
    public function index(){
    	return view('screens.m_screen');
    }

    public function store(StoreScreenRequest $request){
    	$data=$request->all();
    	$screen=Auth::User()->add_screens()->create($data);

    	return response()->json(array('status_text'=>'บันทึกสำเร็จ','success' => true, 'last_insert_id' => $screen->id), 201);

    }
}
