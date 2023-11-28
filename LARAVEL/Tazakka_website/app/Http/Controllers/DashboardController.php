<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //  show all view from Dashboard
    public function index(){
        return view('dashboard.index',[
            'news' => News::all()
        ]);
    }
}
