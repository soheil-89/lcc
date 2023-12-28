<?php

namespace Tests\Unit;

use App\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BaseUnitTestCase extends TestCase
{
    use RefreshDatabase;
    public function setUp(): void
    {
        parent::setUp();

        Order::factory(10)->create();
    }

}
