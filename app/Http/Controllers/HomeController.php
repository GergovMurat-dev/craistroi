<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Main;
use App\Models\Project;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $phone = Contact::query()->firstOrNew()->whatsapp;
        $services = Service::query()->limit(3)->get();
        $objects = Project::query()->limit(6)->get();
        return view('pages.home', [
            'main' => Main::query()->firstOrNew(),
            'services' => $services,
            'objects' => $objects,
            'phone' => $phone
        ]);
    }
}
