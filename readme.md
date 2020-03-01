# Car Search Portal

This is a basic car search demonstrating dropdown functionality.
It is built with the help of Laravel and Vue.


All the steps to install and run the project are given below.

The only pre-requisite is **Docker**.

Steps to install docker according to your OS can be found in **https://docs.docker.com/install/**

Once docker is up and running in your system, follow the below steps :

1. Clone the github repo locally
```sh
git clone https://github.com/thepratiksolanki/car-search.git carsearch
````
2. cd into your project
```sh
cd carsearch
```
3. Run the docker containers in detached mode with the below command
```sh
docker-compose up -d
```
4. Execute php bash to later install dependencies. This command will enter into the container with root user
```sh
docker-compose exec php-fpm bash
```
5. Install all the dependencies with the help of composer
```sh
composer install
```
6. Create a copy of .env file
```sh
cp .env.example .env
```
7. Generate an app encryption key
```sh
php artisan key:generate
```
8. In the .env file, modify the following values :
```sh
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=cardb
DB_USERNAME=caruser
DB_PASSWORD=car1234
```
9. Run the migrations
```sh
php artisan migrate
```
10. Seed the database
```sh
php artisan db:seed
```
11. Visit the below page to see the result
**http://localhost:8081/cars.html**