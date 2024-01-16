<?php

namespace App\Services;

use App\Models\Application;
use App\Repositories\ApplicationRepository;
use App\Services\Common\ServiceResult;

class ApplicationService
{
    public function __construct(
        private readonly ApplicationRepository $applicationRepository
    )
    {
    }

    public function create(array $properties): ServiceResult
    {
        if (empty($properties['email'])) {
            $application = Application::create([
                'name' => $properties['name'],
                'phone' => $properties['phone'],
                'type' => Application::TYPE_SMALL
            ]);

            return ServiceResult::createSuccessResult($application);
        }

        $application = Application::create([
            'name' => $properties['name'],
            'email' => $properties['email'],
            'message' => $properties['message'],
            'phone' => $properties['phone'],
            'type' => Application::TYPE_BIG
        ]);

        return ServiceResult::createSuccessResult($application);
    }
}
