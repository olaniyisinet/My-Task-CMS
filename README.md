# My Task-CMS with Laravel and Vue

This is my attempt to the question.


## Getting Started

-   Download or clone the project.
-   `cd` to the project directory.
-   Run the command `composer install`.
-   Run the command `php artisan key:generate` to generate an application key.
-   Create your mysql database and note your db connections
-   Configure the database settings in the `.env` file (updating the mysql db connection to yours).
-   Update the `PUSHER_APP_*` keys in the `.env` file.
-   Migrate the database by running this command: `php artisan migrate --seed`.
-   Run the command: `php artisan serve` to start the app.


Four Users wil be created:

1. Admin (username: olaniyiadmin@mytest.com, Password: olaniyiadmin)
    - Can Create and Delete other users
    - Can Create and Manage Task Posts
    - Can Create and Manage Single Tasks
    
2.  Employee (username: olaniyiemployee@mytest.com, Password: olaniyiemployee)
     - Can Create and Manage Task Posts
     - Can Create and Manage Single Tasks
 
3.  Employer (username: olaniyiemployer@mytest.com, Password: olaniyiemployer)
     - Can view, comment and update Task Posts and also see live comment rom other users
     - Can update status of Single Tasks
     
4.  Student (username: olaniyistudent@mytest.com, Password: olaniyistudent)
     - Can view and comment on Task Posts and also see live comment rom other users
     - Can view Single Tasks


## Built With

-   [Laravel](https://laravel.com) framework
-   PHP
-   VueJS

## Reference (to avoid PLAGIARISM)

-   https://laravel.com/docs/

