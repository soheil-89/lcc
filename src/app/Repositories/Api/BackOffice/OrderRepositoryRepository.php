<?php

namespace App\Repositories\Api\BackOffice;

use App\Models\Order;
use App\Repositories\Api\BackOffice\Contract\OrderRepositoryInterface;
use App\Services\Filters\FilterFactory;
use App\Facades\FilterManagerFacade as FilterManager;

class OrderRepositoryRepository implements OrderRepositoryInterface
{
    const Path = 'Order';

    public function orderIndex($filters)
    {
        $orders = new Order;

        foreach ($filters as $filterName => $filterValue) {
            $filter = FilterFactory::createFilter(self::Path, $filterName);
            $orders = FilterManager::applyFilter($filter, $orders, $filterValue);
        }
        return $orders->paginate();
    }
}
