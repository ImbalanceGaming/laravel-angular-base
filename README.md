# Laravel Base Project

## Description
Base setup for projects using Laravel.

Make sure not to use this base project directly instead follow the instructions at [this page](https://help.github.com/articles/duplicating-a-repository/).
This will create a duplicate of this repo in a new repo that wont effect this repo.

## Server Requirements
* Composer
* PHP >= 5.5.9
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension

## Installation
1. Clone the repository to the desired location.
2. Run composer install to pull down components into the vendor folder.
3. Set storage and bootstrap/cache folders to be publicly read/write/executable **_sudo chmod -R 777 "folder name"_**.
4. Take a copy of the .env.save file and name it .env **_sudo cp .env.save .env_**, this file contains all configuration options for laravel.
5. Run the **_php artisan key:generate_** command to get a new application key, this should then be set in your .env file if it is not then set it.
6. Change the database config in the .env file as well to desired database.
7. Rename your new app to something appropriate using the **_php artisan app:name "App Name"_** command.
8. Run the **_composer dump-autoload_** command to rebuild composer autoload classes.
8. If the app isn't working after the above command check the namespaces on files as it changes them.
9. You can also do a **_sudo tail -f /var/log/apahce2/error.log_** to see if there are errors.

App still not working? See laravel docs, turn on debug in the .env file and google search any errors you see.

## Useful commands
* **_php artisan cache:clear_** clears cache of app.
* **_php artisan routes_** shows apps current routes.
* **_php artisan clear-compiled_** clears complied classes, useful if you just added a new controller.
* **_php artisan optimize_** does the opposite of above.

## Resources
* [Laravel docs](http://laravel.com/docs/5.1)
* [Composer docs](https://getcomposer.org/doc/)
* [Lots of information on Laravel commands](http://laravel-recipes.com/contents)
