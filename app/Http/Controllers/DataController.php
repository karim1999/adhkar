<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class DataController extends Controller
{
    public function index(Request $request ,Category $category)
    {
    	
    	$azkar=\App\Azkar::where('category_id',$category->id)->get();
		return view('index',compact('azkar'));
    }
}
