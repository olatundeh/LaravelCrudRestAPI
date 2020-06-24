## Project Setup

## Clone the repository

$ git clone https://github.com/olatundeh/LaravelCrudRestAPI.git

## Switch to the repo folder

$ cd LaravelCrudRestAPI

## Install all the dependencies using composer

$ composer install

## Copy the example env file and make the required configuration changes in the .env file

$ cp .env.example .env

$ cp .env.example .env.testing

## Environment variables

.env - Environment variables can be set in this file for development

.env.testing - Environment variables can be set in this file for testting

## Database Setup

$ mysql -u root

> create database dev

> create database test

> exit

$ cd database/db

$ mysql -u root dev  < books.sql

$ mysql -u root test  < books.sql

$ php artisan migrate

Alternatively, you can import the database to your environment using the database file (books.sql)

## Generate a new application key

$ php artisan key:generate

## Generate a new JWT authentication secret key

$ php artisan jwt:generate

## Run your tests

$ composer test

## Testing API

Run the laravel development server

$ php artisan serve

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
