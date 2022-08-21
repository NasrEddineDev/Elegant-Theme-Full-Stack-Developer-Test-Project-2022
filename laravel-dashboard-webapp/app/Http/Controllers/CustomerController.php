<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customers = Customer::all();
        $name = "test";
        return view('customers.index', ["customers" => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customers.show', ["customer" => $customer]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.edit', ["customer" => $customer]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Customer::destroy($id);
        // if ($customer) $customer->destroy();
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function createWordpressAccount($id)
    {
        $customer = Customer::find($id);
        $data = $customer->toArray();
        // $array[] = (object) ['Submit' => 'Create'];
        // $response = Http::withBasicAuth('nasreddine', 'E*pa55w0rd*T')
        //                 ->post('http://wp.com.com/users', $array);
        $response = Http::post('http://wp.com/index.php/wp-json/wp/v2/addetuser', [
            'login'  =>  str_replace('_', ' ', $data["name"]),
            'first_name'    =>  "",
            'last_name'    =>  "",
            'email'   =>  $data["email"],
            'password'   =>  "password",
            'url'   =>  url('customers.show', $id),
            'phone'   =>  $data["phone"],
            'budget'   =>  $data["budget"],
            'message'   =>  $data["message"],
            'role'   =>  "subscriber"
        ]);
        $body = json_decode($response->body());
        if($body->result)
            return redirect()->back()->with('message', "The customer ".$data["name"]." has been saved in WP Successfully!.")
                                    ->with('result', $body->result);
        else
                return redirect()->back()->with('message', "The customer ".$data["name"]." is not saved in WP")
                                        ->with('result', $body->result);

    }
}
