<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index() 
    {
        $data = News::with('category')->get(); 
        $data->load('products');
        
        return view('news.index', compact('data')); 
    }
}
