<?php

namespace Tests\Feature;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function test_products_route_return_ok()
    {
        $response = $this->get('/products');
        $response->assertSee('Products index');
        $response->assertStatus(200);
    }

    public function test_product_has_name()
    {
        $product = Product::factory()->create();
        $this->assertNotEmpty($product->name);
    }

    public function test_product_are_empty()
    {
        $response = $this->get('/products');
        $response->assertSee('No products');
    }

    public function test_product_are_not_empty()
    {
        $product = Product::factory()->create();
        $response = $this->get('/products');
        $response->assertDontSee('No products');
    }


}
