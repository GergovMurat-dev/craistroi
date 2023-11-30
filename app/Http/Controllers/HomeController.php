<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home', ['main' => Main::query()->firstOrNew()]);
    }
}
