<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_homepage_contains_empty_table(): void
    {
        $response = $this->get('/products');

        $response->assertStatus(200);

        $response->assertSee('No products found.');
    }
}
