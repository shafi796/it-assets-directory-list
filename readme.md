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

### Update Database Configuration

In second step, we will make database configuration for example database name, username, password etc for our crud application of laravel 5.8. So let's open .env file and fill all details like as bellow:

~~~
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=it-assets-directory
DB_USERNAME=root
DB_PASSWORD=
~~~


## Built With
This application build with [Laravel 5.8](https://laravel.com/). Go to official website getting complete [documentation](https://laravel.com/docs/5.8)

- [Server Requirements](https://laravel.com/docs/5.8/installation#server-requirements)
- [Installing Laravel](https://laravel.com/docs/5.8/installation#installing-laravel)

## License
The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
