<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $mainCategory = MainCategory::all();
        return view('welcome')->with('mainCategory', $mainCategory);
    }
}
