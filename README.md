# Test
Medbook Test
Create a database locally named test

Download composer https://getcomposer.org/download/

Pull the ams project from git provider.

Rename .env.example file to .env inside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )

Open the console and cd your project root directory

Run composer install or php composer.phar install

Run php artisan key:generate

Run php artisan migrate

Run php artisan serve

Proceed to http://localhost:8000 on your browser.
