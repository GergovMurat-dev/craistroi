<?php

namespace App\Http\Controllers;

use App\Services\ApplicationService;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function __construct(
        private readonly ApplicationService $applicationService
    )
    {
    }

    public function store(Request $request)
    {
        $createResult = $this->applicationService->create($request->all());

        if ($createResult->isError) {
            return response()->json([
                'message' => $createResult->message,
                'errors' => $createResult->errors
            ]);
        }

        return redirect()->back();
    }
}
