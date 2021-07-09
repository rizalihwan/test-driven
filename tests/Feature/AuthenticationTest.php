<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_page()
    {
        $this->withoutExceptionHandling();
        $this->get(route('login.loginpage'))->assertStatus(200);
    }


    public function test_login_authenticated()
    {
        $user = User::factory()->create();
        $response = $this->post(route('login.login'), [
            'email' => $user->email,
            'password' => 'password'
        ]);
        $this->assertAuthenticated();
        $response->assertRedirect('/home');
    }

    public function test_cant_or_wrong_field_for_login()
    {
        $user = User::factory()->create();
        $this->post(route('login.login'), [
            'email' => $user->email,
            'password' => 'ngasal'
        ]);
        // memberitahu bahwa dia adalah tamu / login gagal
        $this->assertGuest();
    }
}
