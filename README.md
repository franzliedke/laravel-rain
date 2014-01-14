# laravel-rain

A Laravel driver for the lightweight PHP templating system [RainTPL](http://raintpl.com/).

## Installation with Composer

#### Step 1: Install package through Composer

Add this line to the `require` section of your `composer.json`:

    "franzl/laravel-rain": "dev-master"

Alternately, you can use the Composer command-line tool by running this command:

    composer require franzl/laravel-rain

Next, run `composer install` to actually install the package.

#### Step 2: Register the service provider

In your Laravel application, edit the `app/config/app.php` file and add this
line to the `providers` array:

    'Franzl\LaravelRain\LaravelRainServiceProvider',

## Usage

Once installed, you can use Laravel's view system as you always do. Files ending in `.dust.php` will automatically be treated as RainTPL templates. As long as you don't try to combine things like Blade layouts and Rain's includes, everything should go well.
