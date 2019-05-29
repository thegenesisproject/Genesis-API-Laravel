# Genesis / Laravel API

This project gives you a boilerplate to start building your REST API with [Laravel PHP framework](https://laravel.com). No more need to begin API development using the base framework.

## How To Install

- Navigate to your project folder in the terminal: `$ cd ~/.../my-project-folder`
- Clone the project from Github, **specifically the 'api-5.x' branch**: `$ git clone git@github.com:thegenesisproject/Genesis-Laravel-API.git --branch api-5.8`, then `$ git checkout -b master`
- Do the usual [Laravel installation and configurations](https://laravel.com/docs/5.8)
- Install composer packages `$ composer install`
- Update the app namespace: `$ php artisan app:name MyAppName`
- Run the migrations: `$ php artisan migrate --seed`
- Start the server: `$ php artisan serve`
- You're ready to go! 

### Starter Features

- [Laravel Passport](https://laravel.com/docs/5.8/passport)
- [Eloquent: API Resources](https://laravel.com/docs/5.8/eloquent-resources)

### Sample Data

Data has been added to help you speed up the project setup. This data includes:

- Users
- Admins
- Product Categories
- (more to come...)

### Testing the API

You can have a look at the `routes/api.php` file to get an idea of the exposed API endpoints. Simply make a GET request to any of these endpoints and view the output.

For example: `GET http://localhost:8000/users` will return JSON output containing username, email, and more.

## Contributing

Feel free to contribute to this project by opening an [issue](https://github.com/thegenesisproject/Genesis-Laravel-API/issues), or sending a pull request.

## Security Vulnerabilities

If you discover a security vulnerability within this project, please send open an [issue](https://github.com/thegenesisproject/Genesis-Laravel-API/issues). All security vulnerabilities will be promptly addressed.

## License

The Genesis Laravel API project is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
