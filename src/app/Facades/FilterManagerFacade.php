<?php

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * @method static applyFilter(mixed $filter, mixed $orders, $filterValue)
 */
class FilterManagerFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'filter-manager';
    }
}
