<?php

namespace Tests\Feature;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
// use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
<<<<<<< HEAD
     *
     * @return void
     */
    public function test_example()
=======
     */
    public function test_the_application_returns_a_successful_response(): void
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
