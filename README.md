
## About This Project 

This is a project for IT Securty Asia Test and this project contain has SQL injection vulnerability, And this is how to use this project:

- [You need symfony framework](https://symfony.com/).
- [You need Xampp](https://www.apachefriends.org/download.html).
- Configure you .env file 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=itsec
DB_USERNAME=root
DB_PASSWORD=
(adjust DB_DATABASE to your database name)
## Command in terminal
- composer update
- php artisan key:generate
- php artisan migrate --seed
- npm install && npm run dev



## This project has SQL injection vulnerability
This is step for securing this project from SQL injection vulnerability
-Set input validation (This project don't have input validation in controller you can add validation inside controller)
-Separate username and password databases(users database and barang still inside same database)
-Installing a filter for metacharacter input(you can add filter for metacharacter input in controller)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
