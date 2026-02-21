<?php

namespace App\Http\Controllers\backend\home;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;

class HomeController extends Controller
{
    public function index()
    {
        $metaTitle = "Echobazar Backend Dashboard";

        $stats = Dashboard::stats();

        return view('dashboard', compact('metaTitle', 'stats'));
    }
}
