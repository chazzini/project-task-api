# Building Projects and Task Api with Laravel includeing documentation

This project is built using Laravel  php most popular framework to show case it power to build api, as well as a pass time for me also.

## Why use Laravel

> Laravel is one of the most well-known and effective PHP frameworks on the market. Flarum, BookStack, and Larasocial are examples of complex web apps that can be built with it. Consider how the Laravel framework can save you up to 35% on development costs.
[- by  neerjasoftwares.com ](https://www.neerjasoftwares.com/blog/laravel-api-development-solution-for-business-project#:~:text=laravel%20API%20development%20is%20a%20precise%20solution%20for,web%20apps%20that%20can%20be%20built%20with%20it.)

---

Laravel helps reduce development time for both api and application, in a structural manner that can be managed.

## Requirements

- PHP 8.0
- Composer
- Dependecies for Laravel
- Laravel 9.0

## Quick Install

Clone the repository
```terminal
 https://github.com/chazzini/project-task-api.git
```
Change directory to the repo you just cloned folder
```
    cd project-task-api
```
Install all dependencies using composer by running the command in your terminal
```
    composer install
```

Copy the .env.example to .env and make the neccessary changes for you app to run
```
    cp .env.example .env
```

Add the database config to you .env file after which you can run migration
using php artisan code below
```
    php artisan migrate
```
