<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Filters\FilterManager;

class FilterManagerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('filter-manager', function () {
            return new FilterManager();
        });
    }
}
