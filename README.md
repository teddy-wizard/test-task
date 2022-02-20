# Full Stack Web Developer - Skill Test
This project is a skill test project for Full Stack Web Developer.

## Front End Part
* [How to run](front-end/README.md)
### Development Framework
**React.js** - React.js is an open-source JavaScript library that is used for building user interfaces specifically for single-page applications.
I choose a this framework because React allows to create a web app more fast, more scalable, and more simple. Also, I have used React framework as frontend on many projects.
**Gatsby.js** - Gatsby does the data sourcing and the fetches the files during the build time itself. I often use for speed and plugins, SEO.

### Development Process
I developed the following 6 react component for this front-end.
* [layout.js](front-end/src/components/layout.js)
* [navbar.js](front-end/src/components/navbar.js)
* [about.js](front-end/src/components/about.js)
* [album.js](front-end/src/components/album.js)
* [footer.js](front-end/src/components/footer.js)
* [card.js](front-end/src/components/atoms/card.js)

From requirements, all data of website is fetched from * [landscapes.json](front-end/static/data/landscapes.json) by using axios when loading page.(layout.js)
```javascript
const getData=()=>{
    axios.get('/data/landscapes.json', {
      headers : {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
        }
    })
    .then(function (response) {
      setProfileData(response.data);
    })
    .catch(function (error) {
        console.log(error)
    });
  }
```

## Back End Part
* [How to run](back-end/README.md)

### Development Framework
**Laravel** - Laravel scores better than other web frameworks because of its advanced features and development tools that facilitate rapid web application development. I have developed many web applications using Laravel. Laravel is one of my main skills.

### Development Process
**- Database Design**
Based on * [landscapes.json](front-end/static/data/landscapes.json), I designed the following 2 tables - users and albums.
users - a table for information of photographers
```php
Schema::create('users', function (Blueprint $table) {
    $table->increments('id');
    $table->timestamps();
    $table->string('name');
    $table->string('phone');
    $table->string('email');
    $table->text('bio');
    $table->string('profile_picture');
});
```

albums - a table for informations of photographer's album
```php
Schema::create('albums', function (Blueprint $table) {
    $table->increments('id');
    $table->timestamps();
    $table->integer('user_id');
    $table->string('title');
    $table->text('description');
    $table->string('img');
    $table->integer('featured')->default(0);
});
```

**- RESTful API**
I developed the following RESTful apis for photographers and albums.

| HTTP Method	| Path | Desciption  |
| ----- | ----- | ------------- |
| GET      | /user | Get all photographers
| GET      | /user/{user_id} | Get a photographer
| POST     | /user | Create a photographer
| PUT      | /user/{user_id} | Update a photographer
| DELETE      | /user/{user_id} | Delete an photographer
| ----- | ----- | ------------- |
| GET      | /album/{user_id} | Get all albums of a photographer
| GET      | /album/{id} | Get an album
| POST     | /album/{user_id} | Create an album
| PUT      | /album/{id} | Update an album
| DELETE      | /album/{id} | Delete an album

**- Controllers**
* [UserController.php](back-end/app/Http/Controllers/UserController.php)
* [AlbumController.php](back-end/app/Http/Controllers/AlbumController.php)

**- Models**
* [User.php](back-end/app/User.php)
* [Album.php](back-end/app/Album.php)

