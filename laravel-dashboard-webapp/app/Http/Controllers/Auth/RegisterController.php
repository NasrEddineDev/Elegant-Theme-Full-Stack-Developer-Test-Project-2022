<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Models\Customer;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Show the application submition form.
     *
     * @return \Illuminate\View\View
     */
    public function submission()
    {
        return view('submission');
    }

    /**
     * Store a new customer.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function storeCustomer(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:customers|max:20',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:20|min:8',
            'email' => 'required|email|max:255|regex:/(.+)@(.+)\.(.+)/i|unique:App\Models\Customer,email',
            'budget' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/|max:20',
            'message' => 'required',
            'checkbox' =>'accepted'
        ], 
        [
            'name.required' => 'Name is required',
            'name.unique' => 'Name must be unique',
            'budget.regex' => 'Budget must be a double number',
            'email.unique' => 'Email must be unique',
            'checkbox.accepted' => 'You must agree the privacy policy'
        ]);

        $customer = new Customer;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->budget = $request->budget;
        $customer->message = $request->message;
 
        $customer->save();

        return redirect()->back()->with('message', 'Your information has been saved ');
    }
}
