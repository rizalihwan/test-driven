<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRegisterTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_page_register_create()
    {
        $this->get('/register/create')->assertStatus(200)->assertSee('email');
    }

    public function test_user_register()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $response = $this->post('/register/store', $user->toArray())->assertStatus(302);
        // ditaro dibawah ini untuk ketika sudah create otomatis login
        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
