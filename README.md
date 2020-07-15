# Notification library via email using phpMailer

This library has the function of sending e-mail using the phpmailer library. Doing this in an uncomplicated way is essential for any system.

To install the library, run the following command:

``` sh
composer require gustavoweb / composer_teste
`````

To use the library, simply require the composer to autoload, invoke the class and call the method:

``` sh
<? php

require __DIR__. '/vendor/autoload.php';

USE Notification \ Email;

$ email = new Email (2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls / ssl)", "port (587)", "from@email.com", "From Name");

$ email-> sendEmail ("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
`````

Note that the entire configuration of sending e-mail is using the magic method builder! Once the builder method has been invoked within your application, your system will be able to take the shots.

### Developers
* [Gustavo Web] - Developer of this library and tutor of the Composer na Prática course!
* [Robson V. Leite] - CEO and Founder UpInside Training
* [UpInside Treinamentos] - Official website of your digital programming and marketing school
* [phpMailer] - Lib to send E-mail

License
----

MIT

** Another UpInside Training course, make good use of it! **

[//]: #
[Gustavo Web]: <mailto: gustavo@upinside.com.br>
[Robson V. Leite]: <mailto: robson@upinside.com.br>
[UpInside Treinamentos]: <https://www.upinside.com.br>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>

  - Import a HTML file and watch it magically convert to Markdown
  - Drag and drop images (requires your Dropbox account be linked)


You can also:
  - Import and save files from GitHub, Dropbox, Google Drive and One Drive
  - Drag and drop markdown and HTML files into Dillinger
  - Export documents as Markdown, HTML and PDF

Markdown is a lightweight markup language based on the formatting conventions that people naturally use in email. As [John Gruber] writes on the [Markdown site] [df1]

> The overriding design goal for Markdown's
> formatting syntax is to make it as readable
> as possible. The idea is that a
> Markdown-formatted document should be
> publishable as-is, as plain text, without
> looking like it's been marked up with tags
> or formatting instructions.

This text you see here is * actually * written in Markdown! To get a feel for Markdown's syntax, type some text into the left window and watch the results in the right.

### Tech

Dillinger uses a number of open source projects to work properly:

* [AngularJS] - HTML enhanced for web apps!
* [Ace Editor] - awesome web-based text editor
* [markdown-it] - Markdown parser done right. Fast and easy to extend.
* [Twitter Bootstrap] - great UI boilerplate for modern web apps
* [node.js] - evented I / O for the backend
* [Express] - fast node.js network app framework [@tjholowaychuk]
* [Gulp] - the streaming build system
* [Breakdance] (https://breakdance.github.io/breakdance/) - HTML to Markdown converter
* [jQuery] - duh

And of course Dillinger itself is open source with a [public repository] [dill]
 on GitHub.

### Installation

Dillinger requires [Node.js] (https://nodejs.org/) v4 + to run.

Install the dependencies and devDependencies and start the server.

`` sh
$ cd dillinger
$ npm install -d
$ node app
``

For production environments ...

`` sh
$ npm install --production
$ NODE_ENV = production node app
``

### Plugins

Dillinger is currently extended with the following plugins. Instructions on how to use them in your own application are linked below.

| Plugin | README |
| ------ | ------ |
| Dropbox | [plugins / dropbox / README.md] [PlDb] |
| GitHub | [plugins / github / README.md] [PlGh] |
| Google Drive | [plugins / googledrive / README.md] [PlGd] |
| OneDrive | [plugins / onedrive / README.md] [PlOd] |
| Medium | [plugins / medium / README.md] [PlMe] |
| Google Analytics | [plugins / googleanalytics / README.md] [PlGa] |


### Development

Want to contribute? Great!

Dillinger uses Gulp + Webpack for fast developing.
Make a change in your file and instantly see your updates!

Open your favorite Terminal and run these commands.

First Tab:
`` sh
$ node app
``

Second Tab:
`` sh
$ gulp watch
``

(optional) Third:
`` sh
$ karma test
``
#### Building for source
For production release:
`` sh
$ gulp build --prod
``
Generating pre-built zip archives for distribution:
`` sh
$ gulp build dist --prod
``
### Docker
Dillinger is very easy to install and deploy in a Docker container.

By default, the Docker will expose port 8080, so change this within the Dockerfile if necessary. When ready, simply use the Dockerfile to build the image.

`` sh
cd dillinger
docker build -t joemccann / dillinger: $ {package.json.version}.
``
This will create the dillinger image and pull in the necessary dependencies. Be sure to swap out `$ {package.json.version}` with the current version of Dillinger.

Once done, run the Docker image and ma
````
````
