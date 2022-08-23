# Elegant-Theme-Full-Stack-Developer-Test-Project-2022

# Full-Stack Developer Test Project By Elegant Theme
## Content
 1) [Introduction](#introduction)
 2) [Project Brief](#project-brief)
 3) [Step 01](#step-01)
 4) [Step 02](#step-02)
 5) [Step 03](#step-03)
 6) [Step 04](#step-04)
 7) [Step 05](#step-05)
 8) [Conclusion](#conclusion)

<a name="introduction"></a>
## 1) Introduction 
Laravel/WordPress Lead Gen Form
As part of the interview process, we would like you to create a simple 
Laravel application and WordPress plugin so that we may assess your core 
competency with the Laravel framework, WordPress functions, coding best 
practices, as well as basic PHP coding and security standards. We expect 
this project to take less than a day to complete, but you can spend more 
time if necessary. 
<a name="project-brief"></a>
 ## 2) Project Brief 
You are building a simple CRM system for a client. The system will collect 
customer data and build customer profiles that the client can browse and 
manage. Customer profiles will exist inside of a custom Laravel dashboard 
adjoined by matching customer profiles on a WordPress website. 
 
<a name="step-01"></a>
## 3) Step 01:
<a name="description-step-01"></a>
### A) Description
The client needs to collect data from potential customers via a simple 
website form and turn those submissions into a list of contacts. Create a 
form to collect the data and save it into the client’s Laravel database. 
 
The form should include the following fields: 
• Name 
• Phone Number 
• Email Address 
• Desired Budget 
• Message 

<a name="implementation-step-01"></a>
### B) Implementation
You will find in this repository the folder "Laravel-dashboard" containing
the source code of this project.
* Source code of RegisterController/storeCustomer method 
```
    /**
     * Store a new customer without login.
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
```

### Please ollow next steps to deploy this web app:

1. Install the dependencies with Composer
```
# cd in your project directory
composer install
composer dumpautoload -o
```
2. Database configuration
* environment file
```
# cd in your .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database-name  #change this
DB_USERNAME=username-of-my-sql-user #change this
DB_PASSWORD=password-of-my-sql-user #change this
```
3. Create database and inserting initial data using this command:
```
# cd in your project directory
php artisan migrate --seed
```
4. Generate the key for your environment file
```
# cd in your project directory
php artisan key:generate
```
5. Finish by clearing the config and generate the cache
```
php artisan config:clear
php artisan config:cache
```
6. Start the web app, I hope you have an enjoyable time in my beautiful web apps!!
```
php artisan serve
```
<a name="screenshots"></a>
7. Screenshots
* Login page 

![Login Page](Images/Login%20Page.png?raw=true "Title")

* Submission page

![Submission Page](Images/Submit%20Page.png?raw=true "Title")

<a name="step-02"></a>
## 3) Step 02
<a name="description-step-02"></a>
### A) Description
Create a simple dashboard using Laravel that the client can use to 
log in and view the customer profiles that have been submitted using the 
form. Use Laravel Breeze to handle authentication. 
<a name="implementation-step-02"></a>
### B) Implementation
I've been integrated this dashboard with the same web app developed in step 01.
Use this next credentials to login to the dashboard:
```
username/email: admin@eleganttheme.dz
password: password
```
* Screenshoots
dashboard

![Dashboard Page](Images/Dashboard%20Page.png?raw=true "Title")

Customers list

![Customers Page](Images/Customers%20Page.png?raw=true "Title")

<a name="step-03"></a>
## 4) Step 03
<a name="description-step-03"></a>
### A) Description
The client needs a basic integration with their WordPress website 
that will allow them to export customer profiles from their Laravel 
dashboard and import them into their WordPress website as WordPress 
users. Add a button to each customer profile in the Laravel dashboard you
created with the text "Create WordPress Account.” Clicking this button will 
use an Ajax request to automatically create a WordPress user with the 
“subscriber” role on the customer’s website using the information in the 
customer profile. It should be possible from the WordPress website to 
identify which profile on in the Laravel database these new users belong to. 
Create a WordPress plugin to handle this Ajax request.

<a name="implementation-step-03"></a>
### B) Implementation

* Screenshot of the Button to create WP Account
![Create WP Account Button](figures/Create%20WP%20Account%20Button.png?raw=true "Title")

* Source code of My-Plugin-For-Elegant-Theme
```
<?php

/**
 * Plugin Name:       My Test Plugin For Elegant Theme
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Nasr Eddine Guelfout
 * Author URI:        https://example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . '/wp-load.php'); // add wordpress functionality
//require_once(ABSPATH .'/wp-blog-header.php');


function addetuser(WP_REST_Request $request){
    if ( is_user_logged_in() ) {
    $data = json_decode($request->get_body(), true);
    $userdata = array(
        'user_login'  =>  $data["login"],
        'first_name'    =>  $data["first_name"],
        'last_name'    =>  $data["last_name"],
        'user_email'   =>  $data["email"],
        'user_pass'   =>  $data["password"],
        'user_url'   =>  $data["url"],
        'phone'   =>  $data["phone"],
        'budget'   =>  $data["budget"],
        'message'   =>  $data["message"],
        'role'   =>  $data["role"]
    );

    $user_id = wp_insert_user( $userdata ) ;
    
    
    if( is_wp_error( $user_id  ) ) {
        return ["message" => $user_id->get_error_message(), "result" => false];
    }
    
    $user = get_user_by('id', $user_id);
    return ["message" => $userdata, "result" => true];
}
else{
    return ["message" => "User is not logged in", "result" => false];
}
}

add_action("rest_api_init", function(){
    register_rest_route("wp/v2", "addetuser", array(
        "methods"  => "POST",
        "callback" => "addetuser"
    ));
});
```

<a name="step-04"></a>
## 5) Step 04
<a name="description-step-04"></a>
### A) Description
The client also needs to be able to locate the matching customer 
profile in the Laravel dashboard while browsing users in their WordPress 
dashboard. Add a button to user profiles in the WordPress dashboard that 
have been imported from the Laravel dashboard. This button should link 
back to the matching customer profile in the Laravel dashboard.  
<a name="implementation-step-04"></a>
### B) Implementation
 Screenshot of profile page in WP website:
 
<a name="step-05"></a>
## 6) Step 05
<a name="description-step-05"></a>
### A) Description
Finally, create some high level PHPUnit tests for your Laravel 
application that will test if the form submission and customer profile export 
functions work as expected.
<a name="implementation-step-05"></a>
### B) Implementation
* Source code of My-Plugin-For-Elegant-Theme
```
<a name="conclusion"></a>
## 1) Conclusion 

