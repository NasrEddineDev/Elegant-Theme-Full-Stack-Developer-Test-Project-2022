# Elegant-Theme-Full-Stack-Developer-Test-Project-2022

# Full-Stack Developer Test Project By Elegant Theme
## Content
 1) [Introduction](##introduction)
 2) [Project Brief](#project-brief)
 3) [Step 01](#step-01)
     * [a. Description](#description-step-01)
     * [b. Implementation](#implementation-step-01)
 3) [Step 02](#step-02)
     * [a. Description](#description-step-02)
     * [b. Implementation](#implementation-step-02)
 3) [Step 03](#step-03)
     * [a. Description](#description-step-03)
     * [b. Implementation](#implementation-step-03)
 3) [Step 04](#step-04)
     * [a. Description](#description-step-04)
     * [b. Implementation](#implementation-step-04)
 3) [Step 05](#step-05)
     * [a. Description](#description-step-05)
     * [b. Implementation](#implementation-step-05)
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
login page 
![Architecture of 3D Secure implementation](figures/3D%20Secure%20Components.png?raw=true "Title")

submission page
![Architecture of 3D Secure implementation](figures/3D%20Secure%20Components.png?raw=true "Title")

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
![Architecture of 3D Secure implementation](figures/3D%20Secure%20Components.png?raw=true "Title")
Customers list
![Architecture of 3D Secure implementation](figures/3D%20Secure%20Components.png?raw=true "Title")

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
![Architecture of 3D Secure implementation](figures/3D%20Secure%20Components.png?raw=true "Title")

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









# Implementation Of 3D Secure E-Commerce Architecture
## Contents:
 1) [Motivation](#motivation)
 2) [Folders description](#folders-description)
 3) [About this project](#about-this-project)
 4) [My dev environment](#my-dev-environment)
     * [a. Hardware](#hardware)
     * [b. Software](#software)
 5) [Web Apps developped](#web-apps-developped)
 6) [Deployment](#deployment)
 7) [Screenshots](#screenshots)
     * [Accounts](#accounts)
        - a) [Merchant](#accounts-merchant)
        - b) [Customer](#accounts-customer)
     * [Step 01: Make online shopping by cardholder](#step01)
        - a) [Hanouti web app home page](#hanouti-home-page)
        - b) [Hanouti login page](#hanouti-login-page)
        - c) [Hanouti add products to cart page](#hanouti-add-products-to-cart-page)
        - d) [Hanouti checkout page](#hanouti-checkout-page)
        - e) [Hanouti choose the payment method page](#hanouti-choose-payment-method-page)
     * [Step 02: Submit card information to Payment Gateway](#step02)
     * [Step 03: Sending/Requesting the code (OTP) ](#step03)
     * [Step 04: verification email](#step04)
     * [Step 05: type code](#step05)
     * [Step 06: Make transaction](#step06)
        - a) [Merchant](#step06-merchant)
        - b) [Customer](#step06-customer)
     * [Step 07: Showing payment receipt](#step07)
     * [Step 08: Send payment receipt via email](#step08)

---------------------
<a name="motivation"></a>
## 1) Motivation:
This is our master thesis project in [University of Ibn Khaldoun TIARET](http://www.univ-tiaret.dz/an/). The present projects and documents (please take a look to this document: [Master thesis repport](master%20thesis%20docs/Master%20Thesis%203D%20Secure%20Architecture.pdf)) aims to describe how to implement the 3D secure protocol according to the EMV standard and adapt it for the ecommerce market in Algeria, and also how to make the double authentication using SMS and email via one-time password (OTP), or other mechanisms.
To do this project, we have developed 5 web applications whitch are: Hanouti ecommerce, payment gateway, interoperability domain, Issuer domain(bank), acquirer domain(bank). We have used Laravel and JQuery framework and many many others open source tools to develop these web apps and to implement this architecture. I hope you to enjoy reading this thesis and testing the five web apps!!!.
<a name="folders-description"></a>
## 2) Folders description:
* **master thesis docs:** this folder contains report and slidshow of this thesis
* **figures:** contains figures used in this thsis
* **source codes of web apps:** contains source codes of the five web apps
* **books:** contains usefull books repports
* **images:** contains logo, ...
* **screenshots:** according to the given name, this folder contains screeshots of differents web applications
<a name="about-this-project"></a>
## 3) About this project: (introduction from our thesis)
Until these days, for many hundreds of years or since the existence of the human being, people were shopping and sometimes traveled to do this to improve their lifestyles. Nowadays, fewer and fewer consumers want to travel to shop, through the Internet these consumers can do all their shopping without leaving their homes. This type of shopping is called e-commerce.
E-Commerce is becoming a useful service for consumers, but it is also an important component in the daily activities of merchants. It allows them to contact their customers and suppliers, advertise and even organize efficiently the invoicing and the distribution of their products and services. In addition, it reduces the operating and support costs of the business. However, the lack of security in web-based transactions and the ease with which the privacy of online communications can be violated are the main stumbling blocks of e-commerce.

Merchant online shop websites provide an easy target for attackers because they typically have limited funds and do not have dedicated personnel to monitor, update and defend their systems.  The attacks on businesses continue to rise each year. The challenge is to successfully integrate effective security measures and mechanisms to protect the business from being compromised by attackers. Effective security is important for the continuity of business, trust of clients, and compliance with industry-specific laws and regulations. One breach in security can cost a business a lot of money, even shut it down.
There are a lot of E-commerce security strategies and mechanisms, one of them is 3D Secure protocol. Which is a messaging protocol developed by EMVCo to enable consumers to authenticate themselves with their card issuer when making card-not-present (CNP) e-commerce purchases. The additional security layer helps prevent unauthorized CNP transactions and protects the merchant from CNP exposure to fraud. The three domains consist of the merchant/acquirer domain, customer/issuer domain, and the interoperability domain.

The documents of this project aims to describe how to implement the 3D secure protocol according to the EMV standard and adapt it for the ecommerce market in Algeria, and also how to make the double authentication using SMS and email via one-time password (OTP), or other mechanisms.

This document is divided into three main sections. The first section gives an overview of ecommerce and E-payment security (the state of the art), this section is organized as follows: the first chapter begins by a history of Ecommerce, following this by its types, its characteristics, and finally its pros and cons. In the second chapter we will show the security services or requirements, the different security models for E-payment using cards, the most famous protocols used in online shopping, and a detailed study of 3D Secure System and a summary of two alternatives that implement 3D Secure scheme.
The second section examines 3D Secure protocol components and messages, a general activity diagram of the protocol is outlined in this section, a detailed and explained steps of this protocol, and finally we will show the 3D Secure pseudocode.
In the last section, we have described our environment including hardware and software tools used, and we have analyzed and presented the different diagrams used to develop the three web applications for banks1, payment gateway, and merchant online shop. After that, we will present source code developed to implement our protocol, and by making a real demonstration, we have obtained comprehensive results proving our implementation.
<a name="my-dev-environment"></a>
## 4) My dev environment:
These are my laptops used to develop this project:
![laptops](images/my%20environment/IMG_20201021_035216.jpg?raw=true "Title")
<a name="hardware"></a>
### a. Hardware

Table 01 Characteristics of physical and virtual machines.

![Table 01 Characteristics of physical and virtual machines](figures/Table%20of%20Characteristics%20of%20physical%20and%20virtual%20machines.png?raw=true "Title")

Architecture of 3D Secure implementation
![Architecture of 3D Secure implementation](figures/3D%20Secure%20Components.png?raw=true "Title")
<a name="software"></a>
### b. Software
We will present here the different tools that we have working with. All our services are most often created using free tools and open source technologies.
* **Laravel**
Is an open-source web application development framework written in PHP. It is created by
Taylor Otwell and released under MIT License. And it offers you rapid application
development following the model-view-controller (MVC) architectural pattern. Laravel is a
framework which makes it easier for you to build professional yet powerful web applications
following much expressive, elegant syntax and architectural pattern.
* **Other tools**
We have also used: PHP as a server scripting language, and Linux Ubuntu as OS, and other tools like: phpMyAdmin, MySQL,Bootstrap, WampServer, Composer, Apache, Visual Studio Code (vsc), VirtualBox, Draw.io, HTML, CSS, JQuery, XML, SSL, RestAPI, JSON.
<a name="web-apps-developped"></a>
## 5) Web Apps developped
1. **Hanouti ecommerce**
To verify our implementation of 3D Secure protocol, we have developed this ecommerce website to make online shopping and it allows to their consumers to buy goods or services from a seller (Merchant) over the Internet using a web browser. The source code is in [source codes of web apps/hanouti folder](source%20codes%20of%20web%20apps/hanouti).
2. **Payment gateway**
To simulate a payment gateway, we have developed this web app, it allaws to us to verify the cardholder information, to send verification code, and to validate this code with the issuer domain. The source code is in [source codes of web apps/pgw_pfe3ds folder](source%20codes%20of%20web%20apps/interoperability_domain).
3. **Interoperability domain**
To simulate an interoperability domain, we have developed this web app to forward messages between issuer and acquirer domains. The source code is in [source codes of web apps/interoperability_domain folder](source%20codes%20of%20web%20apps/interoperability_domain).
4. **Issuer domain(bank)**
To simulate an issuer bank, we have developed this web app to create customers, accounts, cards, transactions, account types, users….etc., please take a look to [Master thesis repport](master%20thesis%20docs/Master%20Thesis%203D%20Secure%20Architecture.pdf) whre we have explained it in brief by showing use cases, sequence diagram, class diagram, functionalities list.
To get the full source code, contact me!.
5. **Acquirer domain(bank)**
To simulate an issuer bank, we have developed this web app to create customers, accounts, cards, transactions, account types, users….etc., please take a look to [Master thesis repport](master%20thesis%20docs/Master%20Thesis%203D%20Secure%20Architecture.pdf) whre we have explained it in brief by showing use cases, sequence diagram, class diagram, functionalities list.
To get the full source code, contact me!.

<a name="deployment"></a>
## 6) Deployment
To install the fifth Web apps, follow these steps for each web app:
1. Install the dependencies with Composer
```
# cd in your project directory
composer install
composer dumpautoload -o
```
2. Database configuration
* config/app.php
```
# cd in your config/app.php file
'env' => env('APP_ENV', 'production'),
# Debug mode
'debug' => env('APP_DEBUG', false),
# URL
'url' => env('APP_URL', 'http://localhost'),
....
```
* environment file
```
# cd in your .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laracom
DB_USERNAME=nasreddine
DB_PASSWORD=*********
```
3. Email configuration
```
# cd in your .env file
MAIL_DRIVER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=465
MAIL_USERNAME=hanouti*******@gmail.com
MAIL_PASSWORD=*********
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=hanouti*******@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```
4. migrate and seed your database
```
# cd in your project directory
php artisan migrate --seed
```
5. Generate the key for your environment file
```
# cd in your project directory
php artisan key:generate
```
6. Finish by clearing the config and generate the cache
```
php artisan config:clear
php artisan config:cache
```
7. Start the ecommerce web site, and if you wish! you can start the other web apps. 
I hope you have an enjoyable time in our beautiful web apps!!
```
php artisan serve
```
<a name="screenshots"></a>
## 6) Screenshots
<a name="accounts"></a>
### Accounts
<a name="accounts-merchant"></a>
#### a) Merchant
![laptops](screenshots/Accounts%20of%20acquirer%20bank.png?raw=true "Accounts of acquirer bank")
<a name="accounts-customer"></a>
#### b) Customer
![laptops](screenshots/Accounts%20of%20issuer%20bank.png?raw=true "Accounts of issuer bank")
<a name="step01"></a>
### Step 01: Make online shopping by cardholder
<a name="hanouti-home-page"></a>
#### Hanouti web app home page
![laptops](screenshots/Hanouti%20ecommerce%20webapp%20home%20page.png?raw=true "Hanouti ecommerce webapp home page")
<a name="hanouti-login-page"></a>
#### Hanouti login page
![laptops](screenshots/Hanouti%20ecommerce%20webapp%20Login%20page.png?raw=true "Hanouti ecommerce webapp Login page")
<a name="hanouti-add-products-to-cart-page"></a>
#### Hanouti add products to cart page
![laptops](screenshots/Hanouti%20ecommerce%20webapp%20Add%20product%20to%20cart%20page.png?raw=true "Hanouti ecommerce webapp Add product to cart page")
<a name="hanouti-checkout-page"></a>
#### Hanouti checkout page
![laptops](screenshots/Hanouti%20ecommerce%20webapp%20Checkout%20page.png?raw=true "Hanouti ecommerce webapp Checkout page")
<a name="hanouti-choose-payment-method-page"></a>
#### Hanouti choose the payment method page
![laptops](screenshots/Hanouti%20ecommerce%20webapp%20Choose%20payment%20method%20page.png?raw=true "Hanouti ecommerce webapp Choose payment method paged")
<a name="step02"></a>
### Step 02: Submit card information to Payment Gateway
#### PGW-PFE3DS, information card page
![laptops](screenshots/Payment%20gateway%20card%20information.png?raw=true "Payment gateway card information")
<a name="step03"></a>
### Step 03: Sending/Requesting the code (OTP) 
#### PGW-PFE3DS, send verification code
![laptops](screenshots/Payment%20gateway%20requesting%20or%20sending%20OTP%20code.png?raw=true "Payment gateway requesting or sending OTP code")
<a name="step04"></a>
### Step 04: verification email 
#### Issuer bank send verification email message
![laptops](screenshots/Code%20verification%20email%20from%20issuer%20bank.png?raw=true "Code verification email from issuer bank")
<a name="step05"></a>
### Step 05: type code
#### PGW-PFE3DS, Enter the code
![laptops](screenshots/Payment%20gateway%20validating%20OTP%20code.png?raw=true "Payment gateway validating OTP code")
<a name="step06"></a>
### Step 06: Make transaction
<a name="step06-merchant"></a>
#### Merchant
* Acquirer Account
![laptops](screenshots/Accounts%20of%20acquirer%20bank%20after%20money%20transfert.png?raw=true "Accounts of acquirer bank after money transfert")
* Acquirer Transaction
![laptops](screenshots/Transactions%20of%20acquirer%20bank.png?raw=true "Transactions of acquirer bank")
<a name="step06-customer"></a>
#### Customer
* Issuer Account
![laptops](screenshots/Accounts%20of%20issuer%20bank%20after%20money%20transfert.png?raw=true "Accounts of issuer bank after money transfert")
* Issuer Transaction
![laptops](screenshots/Transactions%20of%20issuer%20bank.png?raw=true "Transactions of issuer bank")
<a name="step07"></a>
### Step 07: Showing payment receipt
#### Hanouti payment receipt
![laptops](screenshots/Payment%20receipt%20of%20ecommerce%20webapp%20hanouti.png?raw=true "Payment receipt of ecommerce webapp hanouti")
<a name="step08"></a>
### Step 08: Send payment receipt via email
####  Hanouti send payment receipt via email
![laptops](screenshots/Payment%20receipt%20email%20from%20ecommerce%20webapp%20hanouti.png?raw=true "Payment receipt email from ecommerce webapp hanouti")
