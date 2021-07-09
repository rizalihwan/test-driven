<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    public function test_user_logout()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->post(route('logout'))
            ->assertSessionHas('success')
            ->assertRedirect(route('login.loginpage'));
    }
}
