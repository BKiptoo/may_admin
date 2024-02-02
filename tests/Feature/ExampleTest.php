<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = User::factory()->create(); // Create a user for authentication

        $response = $this->actingAs($user)->get('/'); // Authenticate the user before accessing the route

        $response->assertStatus(302); // Check if the response is successful
    }

}
