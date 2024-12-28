<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase; // If you need to refresh the database for each test case

    /**
     * Test that the middleware 'auth' is applied to the controller.
     *
     * @return void
     */
    public function test_auth_middleware_is_applied()
    {
        // Simulate an unauthenticated user
        $response = $this->get('/home');

        // Assert the response is a redirect to the login page
        $response->assertRedirect('/login');
    }

    /**
     * Test the 'index' method returns the 'home' view for authenticated users.
     *
     * @return void
     */
    public function test_index_view_for_authenticated_user()
    {
        // Simulate an authenticated user
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

        // Assert that the response returns the 'home' view
        $response = $this->get('/home');
        $response->assertStatus(200);
        $response->assertViewIs('home');
    }

    /**
     * Test that unauthenticated users are redirected to the login page.
     *
     * @return void
     */
    public function test_unauthenticated_users_redirected_to_login()
    {
        // Try to access the home page without being authenticated
        $response = $this->get('/home');

        // Assert the user is redirected to the login page
        $response->assertRedirect('/login');
    }

    /**
     * Test that authenticated users can view the home page.
     *
     * @return void
     */
    public function test_authenticated_user_can_access_home_page()
    {
        // Simulate an authenticated user
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

        // Check if the authenticated user can access the home page
        $response = $this->get('/home');
        $response->assertStatus(200); // Should return a 200 status
        $response->assertViewIs('home'); // Should load the 'home' view
    }
}
