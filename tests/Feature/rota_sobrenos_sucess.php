<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class rota_sobrenos_sucess extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_sobrenos_sucessful_response()
    {
        $response = $this->get('/sobrenos');

        $response->assertStatus(200);
    }
}
