<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    // Phương thức index để hiển thị trang chủ
    public function index()
    {
        // Trả về view homepage.blade.php
        return view('client.homepage');
    }
}
