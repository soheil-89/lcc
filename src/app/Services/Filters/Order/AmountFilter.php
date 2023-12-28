<?php

namespace app\Services\Filters\Order;

use App\Services\Filters\FilterStrategyInterface;

class AmountFilter implements FilterStrategyInterface
{
    public function apply($model, $value)
    {
        if (isset($value['min']) && isset($value['max'])) {
            return $model->whereBetween('amount', [$value['min'], $value['max']]);
        } elseif (isset($value['min'])) {
            return $model->where('amount', ">=", $value['min']);
        } elseif (isset($value['max'])) {
            return $model->where('amount', "<=", $value['max']);
        } else {
            return $model;
        }

    }
}
