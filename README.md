Check for php version using following command
php -v #must be greater than 7.2.0

Install Composer from
https://getcomposer.org/download/

After installing composer, check for it's version using following command
composer -V

Make sure the Composer global vendor bin directory is in your PATH:
C:\Users\<Your PC Username>\AppData\Roaming\Composer\vendor\bin

Install laravel via composer using following command
composer global require laravel/installer

Clone this project and run the following command:
cd democrudlaravel
php artisan serve
