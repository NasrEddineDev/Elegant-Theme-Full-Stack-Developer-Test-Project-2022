<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    //use RefreshDatabase;

    public function test_submission_screen_can_be_rendered()
    {
        $response = $this->get('/submission');

        $response->assertStatus(200);
    }

    public function test_new_customer_can_submitted()
    {
        $user = factory(User::class)->make();
        $response = $this
            ->actingAs($user)
            ->postJson(route('api.user.store'), [
                'name' => $this->faker->name,
                'email' => $this->faker->safeEmail,
            ]);
        $response
            ->assertStatus(201)
            ->assertJson([
                'created' => true,
            ]);

        $response = $this->post('/submission', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password'
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = User::find(13);

        // $response = $this->actingAs($user)
        //                  ->withSession(['foo' => 'bar'])
        //                  ->get('/');

        $response->assertStatus(200);
    }
}
