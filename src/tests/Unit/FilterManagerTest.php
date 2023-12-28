<?php

namespace Tests\Unit\Services\Filters;

use App\Models\Order;

use App\Services\Filters\FilterManager;

use App\Services\Filters\Order\AmountFilter;

use Tests\Unit\BaseUnitTestCase;

class FilterManagerTest extends BaseUnitTestCase
{
    public function testApplyFilterSuccessfully()
    {
        $filterManager = new FilterManager();
        $filter = new AmountFilter();
        $model = new Order; // Replace YourModel with the actual model class
        $value = ['min' => 1000, 'max' => 999999];;

        $result = $filterManager->applyFilter($filter, $model, $value);
        $this->assertEquals(10, $result->count());
    }


}
