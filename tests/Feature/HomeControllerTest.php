<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the home page is accessible only by authenticated users.
     *
     * @return void
     */
    public function test_authenticated_user_can_access_home_page()
    {
        // Log in the user (you can create a user via a factory or directly)
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

        // Act: Visit the home route
        $response = $this->get(route('home'));

        // Assert: Check if the response is successful and returns the correct view
        $response->assertStatus(200);
        $response->assertViewIs('home');
    }

    /**
     * Test that the home page redirects unauthenticated users to login.
     *
     * @return void
     */
    public function test_unauthenticated_user_is_redirected_to_login()
    {
        // Act: Visit the home route without being authenticated
        $response = $this->get(route('home'));

        // Assert: Check if the user is redirected to the login page
        $response->assertRedirect(route('login'));
    }
}
