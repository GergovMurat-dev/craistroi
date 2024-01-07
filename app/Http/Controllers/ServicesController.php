<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Setting;
use App\Models\TransportService;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $setting = Setting::query()->firstOrNew();
        $title = $setting?->advantages_title;
        $cards = $setting?->card;
        $services = Service::query()->limit(5)->get();
        return view('pages.services', [
            'services' => $services,
            'show' => true,
            'setting' => $setting,
            'title' => $title,
            'cards' => $cards
        ]);
    }

    public function all()
    {
        $setting = Setting::query()->firstOrNew();
        $title = $setting?->advantages_title;
        $cards = $setting?->card;
        $services = Service::all();
        return view('pages.services', [
            'services' => $services,
            'show' => false,
            'setting' => $setting,
            'title' => $title,
            'cards' => $cards
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
        $transports = TransportService::all();
        return view('single.services-transport', ['transports' => $transports]);
    }
}
