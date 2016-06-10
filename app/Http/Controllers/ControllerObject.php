<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControllerObject extends Controller
{
  public function index()
  {
  	$cards = DB::table('sql_table2')->get();

  	return view('object.index', compact('cards'));
  }
}
