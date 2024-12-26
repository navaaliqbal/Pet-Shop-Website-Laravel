<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;

class RouteTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_shows_the_home_page()
{
    $user = User::factory()->create();  // If authentication is needed
    $response = $this->actingAs($user)->get(route('home'));
    $response->assertStatus(200);
    $response->assertViewIs('home'); // Update to match the actual view
}

    

    /** @test */
    public function it_shows_the_about_page()
    {
        $response = $this->get(route('about'));
        $response->assertStatus(200);
        $response->assertViewIs('about');
    }

    /** @test */
    public function it_shows_the_services_page()
    {
        $response = $this->get(route('services'));
        $response->assertStatus(200);
        $response->assertViewIs('services');
    }

    /** @test */
    public function it_shows_the_products_index_page()
    {
        $response = $this->get(route('products.index'));
        $response->assertStatus(200);
    }

    /** @test */
    public function it_shows_the_gallery_page()
    {
        $response = $this->get(route('gallery'));
        $response->assertStatus(200);
        $response->assertViewIs('gallery');
    }

    /** @test */
    public function it_shows_the_contact_page()
    {
        $response = $this->get(route('contact'));
        $response->assertStatus(200);
        $response->assertViewIs('contact');
    }

    
}
