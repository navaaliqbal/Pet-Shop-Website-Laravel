<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticatedUserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authenticated_user_can_access_product_creation_form()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('products.create'));
        $response->assertStatus(200);
    }

    /** @test */
    public function authenticated_user_can_store_a_product()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post(route('products.store'), [
            'name' => 'Sample Product',
            'price' => 100,
            'category' => 'Sample Category', // Add category field
            'description' => 'Sample Description', // Add description field
        ]);
        $response->assertRedirect(route('products.index'));
        $this->assertDatabaseHas('products', ['name' => 'Sample Product']);
    }

    /** @test */
    public function authenticated_user_can_edit_a_product()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $response = $this->actingAs($user)->get(route('products.edit', $product));
        $response->assertStatus(200);
    }

    /** @test */
    public function authenticated_user_can_update_a_product()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create(); // Ensure you have a product to update

        $response = $this->actingAs($user)->put(route('products.update', $product), [
            'name' => 'Updated Name',
            'category' => 'Updated Category', // Add category
            'description' => 'Updated Description', // Add description
            'price' => 200, // You can also update the price if needed
        ]);
        $response->assertRedirect(route('products.index'));
        $this->assertDatabaseHas('products', ['name' => 'Updated Name']);
    }

    /** @test */
    public function authenticated_user_can_delete_a_product()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create();

        $response = $this->actingAs($user)->delete(route('products.destroy', $product));
        $response->assertRedirect(route('products.index'));
        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
}
