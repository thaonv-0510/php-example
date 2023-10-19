<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_redirect_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(302);
    }

    public function test_the_application_returns_a_successful_response(): void
    {
        $user = User::factory()->create();
        Auth::login($user);
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
