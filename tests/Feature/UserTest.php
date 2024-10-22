<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_user_all(): void
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);
    }
    public function test_store_creates_new_user()
    {
        $admin = User::factory()->create();
        $this->actingAs($admin);

        $response = $this->withoutExceptionHandling()
        ->postJson('/api/users', [
            'last_name' => 'New User',
            'first_name' => 'John',
            'nt_id' => 100123,
            'photo' => null,
            'phone' => '+998912345678',
            'profession' => 'Engineer',
            'biography' => 'This is a sample biography',
            'email' => 'john@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertStatus(201)
            ->assertJsonFragment(['last_name' => 'New User']);
    }
}
