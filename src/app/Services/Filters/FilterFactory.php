<?php

namespace App\Services\Filters;

use Illuminate\Support\Str;

class FilterFactory
{
    public static function createFilter($path, $filterName)
    {
        $filterClass = 'App\Services\Filters\\' . $path . '\\' . ucfirst(Str::camel($filterName)) . 'Filter';

        if (class_exists($filterClass)) {
            return new $filterClass();
        }

        throw new \InvalidArgumentException("Filter class '$filterClass' not found.");
    }
}
