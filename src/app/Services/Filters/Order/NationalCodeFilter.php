<?php

namespace app\Services\Filters\Order;

use App\Services\Filters\FilterStrategyInterface;

class NationalCodeFilter implements FilterStrategyInterface
{
    public function apply($model, $value)
    {
        return $model->where('national_code', $value);
    }
}
