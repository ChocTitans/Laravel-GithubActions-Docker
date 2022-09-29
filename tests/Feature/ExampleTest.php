<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_store()
    {
        $this->get('/store')->assertStatus(200);
    }

    public function test_it_exists()
    {
        $this->get('/test')->assertStatus(200);
    }

}
