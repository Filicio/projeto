<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ministro;
class MinistrosController extends Controller
{
    public function index()
    {
       // $ministros = ministro::all();
        return view('ministros.index', compact('ministros'));
    }
    

}
