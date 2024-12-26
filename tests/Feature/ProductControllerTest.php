<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User; // Add this import for User model
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    // Helper method to log in a user before each test
    public function setUp(): void
    {
        parent::setUp();
        // Create a test user
        $this->user = User::factory()->create();
    }

    // Test the index method
    /** @test */
    public function it_displays_all_pet_products()
    {
        // Log in the user
        $this->actingAs($this->user);

        // Create some products
        Product::create([
            'category' => 'Pet',
            'name' => 'Cat Food',
            'description' => 'High-quality food for cats.',
            'price' => 15.99
        ]);
        Product::create([
            'category' => 'DIY Pet Kit',
            'name' => 'Dog Grooming Kit',
            'description' => 'Complete grooming kit for dogs.',
            'price' => 25.50
        ]);

        // Act: Hit the route that triggers the index method
        $response = $this->get(route('products.index'));

        // Assert: Check if the products are returned in the view
        $response->assertStatus(200);
        $response->assertViewIs('products');
        $response->assertViewHas('products');
    }

    // Test the store method (valid input)
    /** @test */
    public function it_stores_a_product()
    {
        // Log in the user
        $this->actingAs($this->user);

        // Arrange: Prepare product data
        $data = [
            'category' => 'Pet',
            'name' => 'Dog Food',
            'description' => 'Premium food for dogs',
            'price' => 20.99
        ];

        // Act: Send a POST request to store the product
        $response = $this->post(route('products.store'), $data);

        // Assert: Check if the product was stored and redirected
        $response->assertRedirect(route('products.index'));
        $this->assertDatabaseHas('products', $data);
    }

    // Test the store method (invalid input)
    /** @test */
    public function it_validates_product_data_when_storing()
    {
        // Log in the user
        $this->actingAs($this->user);

        // Act: Send a POST request with missing required fields
        $response = $this->post(route('products.store'), []);

        // Assert: Check if validation errors are returned
        $response->assertSessionHasErrors(['category', 'name', 'description']);
    }

    // Test the update method (valid input)
    /** @test */
    public function it_updates_a_product()
    {
        // Log in the user
        $this->actingAs($this->user);

        // Arrange: Create a product
        $product = Product::create([
            'category' => 'Pet',
            'name' => 'Dog Ball',
            'description' => 'Bouncy ball for dogs.',
            'price' => 7.50
        ]);

        // Prepare updated data
        $data = [
            'category' => 'DIY Pet Kit',
            'name' => 'Dog Toy Kit',
            'description' => 'Complete kit for making dog toys',
            'price' => 22.99
        ];

        // Act: Send a PUT request to update the product
        $response = $this->put(route('products.update', $product->id), $data);

        // Assert: Check if the product was updated in the database and redirected
        $response->assertRedirect(route('products.index'));
        $this->assertDatabaseHas('products', $data);
    }

    // Test the destroy method
    /** @test */
    public function it_deletes_a_product()
{
    // Log in the user
    $this->actingAs($this->user);

    // Arrange: Create a product
    $product = Product::create([
        'category' => 'DIY Pet Kit',
        'name' => 'Pet Toy Making Kit',
        'description' => 'DIY kit for making pet toys.',
        'price' => 18.00
    ]);

    // Act: Send a DELETE request to delete the product
    $response = $this->delete(route('products.destroy', $product->id));

    // Assert: Check if the product was deleted and redirected
    $response->assertRedirect(route('products.index'));

    // Assert: Check if the product is actually deleted from the database
    $this->assertDatabaseMissing('products', [
        'id' => $product->id,
        'name' => 'Pet Toy Making Kit',
    ]);
}

}
