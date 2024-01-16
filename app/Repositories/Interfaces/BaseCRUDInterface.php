<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseCRUDInterface
{
    public function getAll(): ?Collection;

    public function getById(int $id): ?Model;

    public function getModelQB(): Builder;
}
