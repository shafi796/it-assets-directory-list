# IT Assets Directory Application 
IT assets directory is a web application, for finding the details of the products in the IT department like as laptops, phones, desktops etc. along with an overview of their status.
The application have the CRUD functionality which means the user can Create, Read, Update and Delete the products. 

The following are the properties of an asset will have: 

* Label
* Description
* Type (Laptop, mobile, ...)
* Status (In-use, available, ...)
* Initial Purchase Date
* Current owner

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Test environment setup 

* Download mannualy or Clone this repository using below mentined command  
~~~
git clone https://github.com/shafi796/it-assets-directory-list.git
~~~
* Composer Dependencies & Packages updaate using this command
~~~
composer update
~~~


### Update Database Configuration

In second step, we will make database configuration for example database name, username, password etc for our crud application of laravel 5.8. So let's open .env file and fill all details like as bellow:

.env
~~~
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=it-assets-directory
DB_USERNAME=root
DB_PASSWORD=
~~~

Now you have to run this migration by following command for creating tabele for listing  it assets:

~~~
php artisan migrate
~~~

### Run application

~~~
php artisan serve
~~~

Now you can open bellow URL on your browser:

~~~
http://localhost:8000/itassets
~~~

## Built With
This application build with [Laravel 5.8](https://laravel.com/). Go to official website getting complete [documentation](https://laravel.com/docs/5.8)

- [Server Requirements](https://laravel.com/docs/5.8/installation#server-requirements)
- [Installing Laravel](https://laravel.com/docs/5.8/installation#installing-laravel)

## Coding Style
Laravel follows the PSR-0 and PSR-1 coding standards. In addition to these standards, the following coding standards should be followed:

* The class namespace declaration must be on the same line as <?php.
* A class' opening { must be on the same line as the class name.
* Functions and control structures must use Allman style braces.
* Indent with tabs, align with spaces.

## License
The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
