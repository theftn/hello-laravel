<?php

<<<<<<< HEAD
namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
=======
it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
>>>>>>> febcfe5a77e2e0eb3e745e475bd864a7688acae1
