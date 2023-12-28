<?php

namespace Tests\Unit\Services\Filters;

use App\Services\Filters\FilterFactory;
use app\Services\Filters\Order\AmountFilter;
use app\Services\Filters\Order\NationalCodeFilter;
use app\Services\Filters\Order\StatusFilter;
use Tests\Unit\BaseUnitTestCase;


class FilterFactoryTest extends BaseUnitTestCase
{

    public function testCreateFilterAmountSuccessfully()
    {
        $filter = FilterFactory::createFilter('Order', 'amount');
        $this->assertInstanceOf(AmountFilter::class, $filter);
    }

    public function testCreateFilterNationalCodeSuccessfully()
    {
        $filter = FilterFactory::createFilter('Order', 'national_code');
        $this->assertInstanceOf(NationalCodeFilter::class, $filter);
    }
    public function testCreateFilterStatusSuccessfully()
    {
        $filter = FilterFactory::createFilter('Order', 'status');
        $this->assertInstanceOf(StatusFilter::class, $filter);
    }

    public function testCreateFilterNotFound()
    {
        $this->expectException(\InvalidArgumentException::class);

        FilterFactory::createFilter('Order', 'nonexistent_filter');


    }
}
