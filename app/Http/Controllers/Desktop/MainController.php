<?php

namespace App\Http\Controllers\Desktop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * 前往桌面视图
     */
    public function goDesktop() {
        return view('desktop.index');
    }
}
