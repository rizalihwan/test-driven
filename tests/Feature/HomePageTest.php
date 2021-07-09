<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page()
    {
        $user = User::factory()->create();
        // meloginkan user yang sudah di create diatas
        $this->actingAs($user);
        $this->get('/home')->assertStatus(200);
    }

    public function test_if_user_not_authenticated()
    {
        $this->withoutExceptionHandling();
        $this->get(route('login.loginpage'))->assertStatus(200);
    }
}
