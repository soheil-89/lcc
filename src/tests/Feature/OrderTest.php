<?php

namespace Tests\Feature;

use App\Models\Order;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use RefreshDatabase;
    public function setUp(): void
    {
        parent::setUp();

        Order::factory(10)->create();
    }
    /**
     * A basic feature test example.
     */
    public function testGetOrdersWithFilters()
    {
        // Make the actual HTTP request to your API
        $response = $this->get('/api/backoffice/orders?status=active&amount[min]=1&amount[max]=1200000');

        // Assert a successful response from your API
        $response->assertOk();

        // Add additional assertions based on your API response structure or requirements
        // For example, you can assert specific data returned by your API
        $response->assertJson([
            'data' => [
                ['id' => 91],
                ['id' => 92],
            ]
        ]);

        // You can also use more specific assertions
        $response->assertJsonCount(10, 'data');
    }

    public function testPostOrdersWithFilters()
    {
        // Make the actual HTTP request to your API
        $response = $this->postJson('/api/backoffice/orders', [
            'status' => 'active',
            'amount' => [
                'min' => 1,
                'max' => 1200000,
            ],
        ]);

        // Assert a successful response from your API
        $response->assertOk();

        // Add additional assertions based on your API response structure or requirements
        // For example, you can assert specific data returned by your API
        $response->assertJson([
            'data' => [
                ['id' => 101],
                ['id' => 102],
            ]
        ]);

        // You can also use more specific assertions
        $response->assertJsonCount(10, 'data');
    }
}
