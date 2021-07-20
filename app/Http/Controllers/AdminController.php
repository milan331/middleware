<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function __construct(){

        $this->middleware('IsAdmin');

    }


    public function index(){
        echo "you are an administrator";
    }

}
