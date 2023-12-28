<?php
declare(strict_types=1);

namespace App\Providers;

use App\Repositories\Api\BackOffice;

use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Binding services.
     *
     * @return void
     */
    public array $bindings = [
        BackOffice\Contract\OrderRepositoryInterface::class => BackOffice\OrderRepositoryRepository::class,
    ];
}
