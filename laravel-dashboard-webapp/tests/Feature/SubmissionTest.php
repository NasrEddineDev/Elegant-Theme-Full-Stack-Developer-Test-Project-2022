<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Customer;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    //use RefreshDatabase;

    public function test_submission_screen_can_be_rendered()
    {
        $response = $this->get('/submission');

        $response->assertStatus(200);
    }

    public function test_new_customer_can_be_stored()
    {
        $response = $this->post('/submission', [
            'name' => 'testa',
            'phone' => 215454545454,
            'email' => 'test',
            'budget' => 1000,
            'message' => 'required',
        ]);

        $response->assertRedirect('/');
    }

    public function test_submission_customer_duplication()
    {
        $customer1 = Customer::make([
            'name' => 'test',
            'phone' => 215454545454,
            'email' => 'test',
            'budget' => 1000,
            'message' => 'required',
        ]);
        $customer2 = Customer::make([
            'name' => 'testa',
            'phone' => 215454545454,
            'email' => 'test',
            'budget' => 1000,
            'message' => 'required',
        ]);

        $this->assertTrue($customer1->name != $customer2->name);
    }

    public static $saved_customer;
    public function test_delete_customer()
    {
        $customer = Customer::factory()->count(1)->create();

        $customer = Customer::first();

        if ($customer){
            $customer->delete();
        }
        $customer->save();
        self::$saved_customer = $customer;
        $this->assertTrue(true);
    }

    public function test_database()
    {
        $this->assertDatabaseHas('customers',[
            'name' => self::$saved_customer->name
        ]);
    }
}
