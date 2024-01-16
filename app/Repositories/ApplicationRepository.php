<?php

namespace App\Repositories;

use App\Models\Application;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ApplicationRepository implements Interfaces\BaseCRUDInterface
{

    public function getAll(): ?Collection
    {
        return Application::all();
    }

    public function getById(int $id): ?Model
    {
        return Application::query()->find($id);
    }

    public function getModelQB(): Builder
    {
        return Application::query();
    }
}
