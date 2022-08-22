<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = User::find(13);

        $response = $this->actingAs($user)
                         ->withSession(['foo' => 'bar'])
                         ->get('/');

        $response->assertStatus(200);
    }
}
