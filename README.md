# ART-VAULT

<img src="public/images/Greek-filigree-pattern.png" alt="Greek filigree pattern" width="33%" height="50px"/><img src="public/images/Greek-filigree-pattern.png" alt="Greek filigree pattern" width="33%" height="50px"/><img src="public/images/Greek-filigree-pattern.png" alt="Greek filigree pattern" width="33%" height="50px"/>

**Art-Vault** is a platform dedicated to preserving and protecting the artistic heritage of humanity, both physical and digital. Inspired by the Svalbard Global Seed Vault, which safeguards essential seeds for the future of biodiversity, Art-Vault stands as a digital refuge where the most valuable artworks are preserved for future generations. Its goal is to safeguard the creative legacy, working with museums, artists, and collectors to ensure that these pieces are not lost to time, disasters, or technological threats.

More than just an archive, **Art-Vault** is a sanctuary for art, designed to ensure that the beauty, creativity, and cultural history of humanity remain accessible worldwide. Its mission is to protect these artistic expressions not only as testimonies of the past but as living sources of inspiration for the future, ensuring that art continues to thrive and impact future generations.

<img src="public/images/Greek-filigree-pattern.png" alt="Greek filigree pattern" width="33%" height="50px"/><img src="public/images/Greek-filigree-pattern.png" alt="Greek filigree pattern" width="33%" height="50px"/><img src="public/images/Greek-filigree-pattern.png" alt="Greek filigree pattern" width="33%" height="50px"/>

## Getting Started 🏛️

See Installation for instructions on how to deploy the project.

### Pre-requisitos 🪨

* **[IDE]** - Integrated Development Environment. In our case, we used Visual Studio Code (https://code.visualstudio.com). It can be downloaded from the official website.

* **[Node]** -  A runtime environment that allows developers to run JavaScript on the server side. We can download it from the official website (https://nodejs.org/en/), it's recommended to use the LTS version.

* **[MySQL Server 8.0]** - Database. Download it from the official website (https://dev.mysql.com/downloads/installer/). IMPORTANT: During installation, you will be asked to create an administrator password, which is important to remember for later use.

* **[Laragon]** - A portable, fast, and powerful local development environment for PHP, Node.js, Python, and more. It provides an easy setup for local servers and databases, including Apache, MySQL, and Nginx. You can download it from the official website (https://laragon.org).

* **[PHP]** - A popular server-side scripting language designed for web development. It is widely used to create dynamic and interactive websites. You can download it from the official website (https://www.php.net). To work with Laravel 11, PHP 8.2 or higher is required.

### Installation 🎨

* We will start by cloning the repository to our local machine.

```
git clone https://github.com/EchedeyHenr/art_vault.git
```

* Start Laragon, open the Database included in Laragon, and also open the Terminal. Once in the Terminal, we are located in the folder "/c/laragon/www", where projects are created by default. Access your project folder.

```
cd art-vault
```

* Inside your project folder, proceed to install the dependencies.

```
npm install
composer install
```

* To start the application, a connection to the Database is necessary.

In the second step, we have already opened the Database; we just need to access it.

**In case of an error:**
1. Check that the ".env" file is present in your project.

**If errors persist:**
1. Stop Laragon.
2. Ensure that the "MySQL" service is stopped.
3. Restart Laragon.
4. You should now be able to access the Database without issues.

* To run the migration for the table in our Database, we will use the following command:

```
php artisan migrate
```
This command will create the necessary tables for our application to function.

* (OPTIONAL) If we want to have test data in our table, we will execute the following command:

```
php artisan db:seed --class=PaintingsTableSeeder
```
This command will insert some records into our Database.

* Now we can start the application:

```
php artisan serve
```

## Running Tests 🖼️

You can access the application and use it normally.

* Accessing the application:
    - Go to localhost:8000/
    - The Welcome screen will load.
    - After 3 seconds, the access button will appear in the upper left corner.

* Creating a new record:
    - Click the button in the navigation navbar located at the top right.
    - Fill out the form and add the new record.
    - If there are no errors, you will be redirected to the list of Paintings.

* Deleting a record:
    - From the list of Paintings, click the "Borrar" button.
    - The record will be removed from the list of Paintings.

**In the artistic universe, each data point has its place and meaning. Do not delete them; remember, art is an act of creation, and each element in our list is part of the story we are telling.**

* Editing an existing record:
    - From the list of Paintings, click the "Editar" button.
    - Modify the fields as desired and click "Editar Obra".
    - If there are no errors, you will be redirected to the list of Paintings.

## Built With 🖥️

* [Laravel] - A PHP framework for building modern web applications with an elegant syntax and powerful tools for routing, authentication, and more.
* [Blade-templates] - A simple yet powerful templating engine provided by Laravel for building dynamic web pages with clean and reusable code.
* [Eloquent-ORM] - Laravel's Object-Relational Mapping (ORM) system, which provides an elegant and fluent way to interact with databases using PHP models.
* [MySQL] - A tool for managing relational databases.

## Autores 🎭

* **Echedey Henríquez Hernández** - *Initial Work* - [EchedeyHenr](https://github.com/EchedeyHenr)
* **Andrés Villanueva** - *ReadMe* - [Villanuevand](https://github.com/Villanuevand)

## Licencia 📄

This project is licensed under the (Your License) - see the [LICENSE.md](LICENSE.md) file for details.

---
⌨️ with ❤️ by [EchedeyHenr](https://github.com/EchedeyHenr) 😊

<img src="public/images/Greek-filigree-pattern.png" alt="Greek filigree pattern" width="33%" height="50px"/><img src="public/images/Greek-filigree-pattern.png" alt="Greek filigree pattern" width="33%" height="50px"/><img src="public/images/Greek-filigree-pattern.png" alt="Greek filigree pattern" width="33%" height="50px"/>
