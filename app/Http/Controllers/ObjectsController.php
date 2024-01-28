<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class ObjectsController extends Controller
{
    public function index()
    {
        $objects = Project::query()->limit(6)->get();
        return view('pages.objects', [
            'objects' => $objects,
            'show' => true
        ]);
    }

    public function all(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $objects = Project::all();
        return view('pages.objects', [
            'objects' => $objects,
            'show' => false
        ]);
    }

    public function single($id)
    {
        $object = Project::find($id);
        if (!$object) {
            return redirect()->route('home');
        }
        return view('single.single-object', ['object' => $object]);
    }
}
