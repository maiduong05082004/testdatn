<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent_id')->with('childrenRecursive')->get();
        
        return response()->json($categories);
    }
}
