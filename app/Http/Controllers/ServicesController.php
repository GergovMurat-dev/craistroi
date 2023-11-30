<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('pages.services');
    }

    public function single($id)
    {
        return view('single.services-single');
    }

    public function transport()
    {
        return view('single.services-transport');
    }
}
