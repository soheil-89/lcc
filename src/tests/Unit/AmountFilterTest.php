<?php

namespace Tests\Unit\Services\Filters\Order;

use App\Models\Order;
use App\Services\Filters\Order\AmountFilter;

use Tests\Unit\BaseUnitTestCase;

class AmountFilterTest extends BaseUnitTestCase
{
    public function testAmountFilterWithMinAndMax()
    {
        $filter = new AmountFilter();
        $model = new Order; // Replace YourModel with the actual model class
        $value = ['min' => 1000, 'max' => 999999];

        $result = $filter->apply($model, $value);

        $this->assertEquals(10, $result->count());
    }

    public function testAmountFilterWithMinOnly()
    {
        $filter = new AmountFilter();
        $model = new Order; // Replace YourModel with the actual model class
        $value = ['min' => 1000];

        $result = $filter->apply($model, $value);

        $this->assertNotEquals(0, $result->count());
    }

    public function testAmountFilterWithMaxOnly()
    {
        $filter = new AmountFilter();
        $model = new Order; // Replace YourModel with the actual model class
        $value = ['max' => 999999];

        $result = $filter->apply($model, $value);

        $this->assertEquals(10, $result->count());
    }

    public function testAmountFilterWithNoValues()
    {
        $filter = new AmountFilter();
        $model = new Order; // Replace YourModel with the actual model class
        $value = [];

        $result = $filter->apply($model, $value);

        $this->assertEquals(10, $result->count());
    }
}
