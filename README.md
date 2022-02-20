# Full Stack Web Developer - Skill Test

# Front End Part(React)

## How To Use 

From your command line, clone and run front-end:

### Clone this repository
```bash
$ git clone https://github.com/teddy-wizard/test-task.git
```

### Go into the repository
```bash
$ cd test-task/front-end
```

### Install dependencies
```bash
$ yarn
```

### Start's development server
```bash
$ yarn start
```

#### Personalize page content in `/static/data/landscapes.json` & modify it as per your need.


# Back End Part(Laravel)

## How To Use 

From your command line, clone and run back-end:

### Clone this repository
```bash
$ git clone https://github.com/teddy-wizard/test-task.git
```

### Go into the repository
```bash
$ cd test-task/back-end
```

### Install dependencies
```bash
$ composer install
```

### Create database in mysql
```bash
mysql> CREATE DATABASE test;
```

### Set database username and password in env file

### Migrate database
```bash
$ php artisan migrate --seed
```

### Start's development server
```bash
$ php artisan serve
```


### API Routes
| HTTP Method	| Path | Action | Scope | Desciption  |
| ----- | ----- | ----- | ---- |------------- |
| GET      | /user | index | users:list | Get all photographers
| GET      | /user/{user_id} | index | users:list | Get a photographer
| POST     | /user | store | users:create | Create a photographer
| PUT      | /user/{user_id} | update | users:write | Update a photographer
| DELETE      | /user/{user_id} | destroy | users:delete | Delete an photographer
| ----- | ----- | ----- | ---- |------------- |
| GET      | /album/{user_id} | index | users:list | Get all albums of a photographer
| GET      | /album/{id} | index | users:list | Get an album
| POST     | /album/{user_id} | store | users:create | Create an album
| PUT      | /album/{id} | update | users:write | Update an album
| DELETE      | /album/{id} | destroy | users:delete | Delete an album

### TEST
You can check these REST APIs with [Postman.](https://www.getpostman.com/)
