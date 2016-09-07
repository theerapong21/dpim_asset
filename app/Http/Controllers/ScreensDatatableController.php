<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\m_screen;
use yajra\laravel-datatables-oracle\src\Datatables;

class ScreensDatatableController extends Controller
{
    public function screenList(){
    	
    	return Datatables::of(DB::table('m_screens'))->make(true);
    } 
}
