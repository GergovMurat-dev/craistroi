<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::query()->limit(6)->get();
        return view('pages.services', [
            'services' => $services,
            'show' => true
        ]);
    }

    public function all()
    {
        $services = Service::all();
        return view('pages.services', [
            'services' => $services,
            'show' => false
        ]);
    }

    public function single($id)
    {
        $service = Service::find($id);
        if (!$service) {
            return redirect()->route('home');
        }
        return view('single.services-single', ['service' => $service]);
    }

    public function transport()
    {
        return view('single.services-transport');
    }
}
