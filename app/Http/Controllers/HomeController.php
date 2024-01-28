<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Main;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $phone = Contact::query()->firstOrNew()->whatsapp;
        $services = Service::query()->limit(2)->get();
        $objects = Project::query()->limit(6)->get();
        $settings = Setting::query()->first();

        return view('pages.home', [
            'main' => Main::query()->firstOrNew(),
            'services' => $services,
            'objects' => $objects,
            'phone' => $phone,
            'setting' => $settings
        ]);
    }
}
