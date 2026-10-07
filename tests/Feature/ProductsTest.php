<?php
namespace Tests\Feature;
use Tests\TestCase;
class ProductsTest extends TestCase {
 public function test_product_routes_and_navigation() {
  $this->get('/products')->assertOk()->assertSee('Product View')->assertSee('Add Product')->assertDontSee('/products/1/edit');
  $this->get('/products/create')->assertOk()->assertSee('New Product Creation');
  $this->get('/products/1/edit')->assertOk()->assertSee('Product Editing');
 }
}
