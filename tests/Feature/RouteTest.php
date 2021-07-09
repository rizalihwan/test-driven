<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    // introduction test
    // use RefreshDatabase;
    public function testAboutPage()
    {
        $this->get('/about-page')->assertRedirect('/about');
    }

    public function test_about_can_be_rendered()
    {
        $this->get('/about')->assertStatus(200)->assertSee('as');
    }
}
