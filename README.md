# Full Stack Web Developer - Skill Test
This project is a skill test project for Full Stack Web Developer.

## Front End Part
* [How to run](front-end/README.md)
### Development Framework
React Framework - React.js is an open-source JavaScript library that is used for building user interfaces specifically for single-page applications.
I choose a this framework because React allows to create a web app more fast, more scalable, and more simple. Also, I have used React framework as frontend on many projects.
Gatsby.js - Gatsby does the data sourcing and the fetches the files during the build time itself. I often use for speed and plugins, SEO.

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

## Back End Part(Laravel)
* [How to run](back-end/README.md)
