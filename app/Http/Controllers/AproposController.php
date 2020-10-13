<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class AproposController extends Controller
{
    public function index(){
    	return View('apropos.index'); 
    }
}
