<?php

namespace app\Services\Filters\Order;

use App\Services\Filters\FilterStrategyInterface;

class StatusFilter implements FilterStrategyInterface
{
    public function apply($model, $value)
    {
        return $model->where('status', $value);
    }
}
