<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage()
    {
        $this->get('/')->assertOk();

        $this->get(route('welcome'))->assertOk();
    }

    public function test_dashboard()
    {
        $this->signIn();

        $this->get(route('dashboard'))->assertOk();
    }
}
