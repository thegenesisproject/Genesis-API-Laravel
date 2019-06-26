# Genesis / API / Laravel

This project gives you a boilerplate to start building your REST API with [Laravel PHP framework](https://laravel.com). No more need to begin API development from scratch (using the base framework).

## How To Install

- Navigate to your projects folder in the terminal: `$ cd ~/.../my-projects-folder`
- Clone the project from Github: `$ git clone git@github.com:thegenesisproject/Genesis-API-Laravel.git`. Then switch to an existing stable branch: `$ git checkout {api-master or api-5.8}`.
> Or alternatively, you can clone **a specific branch (e.g. api-5.8)**: `$ git clone git@github.com:thegenesisproject/Genesis-Laravel-API.git --branch api-5.8`. Then create a new branch to act as the main branch: `$ git checkout -b {new-branch-name}`.
- Install composer packages (dependencies): `$ composer install`
- Do the usual [Laravel installation and configurations](https://laravel.com/docs/5.8)
- Create a *.env* file, and use content from *.env.example*
- Update the app namespace: `$ php artisan app:name MyAppName`
> Make sure to also update all references to 'App\' namespace, with 'MyAppName\', inside the code.
- Run the migrations: `$ php artisan migrate --seed`
- Start the server: `$ php artisan serve`
- You're ready to go! 

### Starter Features

- [Laravel Passport](https://laravel.com/docs/5.8/passport)
- [Eloquent: API Resources](https://laravel.com/docs/5.8/eloquent-resources)

### Sample Data

Data has been added to help you speed up the project setup. This sample data includes:

- Users
- Admins
- (more to come...)

We also added some sample relationships:

- One-To-One [polymorphic relationship](https://laravel.com/docs/5.8/eloquent-relationships#polymorphic-relationships) between `Admin` and `User`

### Testing the API

You can have a look at the `routes/api.php` file to get an idea of the exposed API endpoints. Simply make a GET request to any of these endpoints and view the output.

For example: `GET http://localhost:8000/users` will return JSON output containing user data from the database.

> **Note:** You will need to configure the Laravel Passport package in order to access the API data.

## Updates

We will continue to make updates to this project as we add new features and fix any issues we encounter. Simply, check the commit logs if you would like to review the latest additions.

### Contributing

Feel free to contribute to this project by opening an [issue](https://github.com/thegenesisproject/Genesis-Laravel-API/issues), or sending a pull request.

## Security Vulnerabilities

If you discover a security vulnerability within this project, please send open an [issue](https://github.com/thegenesisproject/Genesis-Laravel-API/issues). All security vulnerabilities will be promptly addressed.

## License

The Genesis Laravel API project is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
