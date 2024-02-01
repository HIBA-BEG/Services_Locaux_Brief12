<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class CategoryController extends Controller
{
    public function index(){
        return view('categories.index');
    }

    public function create(){
        return view('categories.create');
    }
    public function store(Request $request){
        // dd($request);
        
    }
}
