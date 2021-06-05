<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{
    public function index(){
        return view ('home0176');
    }
    public function dokter(){
        return view ('dokter0176');
    }
    public function pasien(){
        return view ('pasien0176');
    }
    public function user(){
        return view ('user0176');
    }
}
