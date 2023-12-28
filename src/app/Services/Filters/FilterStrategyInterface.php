<?php

namespace App\Services\Filters;

use Illuminate\Database\Eloquent\Model;

interface FilterStrategyInterface
{
    public function apply(Model $model, $value);
}
