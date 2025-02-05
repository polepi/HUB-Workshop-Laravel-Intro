## Requirements

- Available Pizzas; Orders; User data must be stored in the database.
- Customers cannot access staff features nor create a staff account.
- Orders must contain the following:
  - Pizza Type (such as Margherita, York, Pepperoni..)
  - Pizza Size (such as Small, Medium, Big)
  - Pizza ingredients (such as Tomato Sauce, Cheese, Bacon..)

## Features

##### ✅ Pizza Menu

Loads the available pizzas from the database and list them for the customers to see.
> 💡 Info
> TDLR: Create a route that serves all the needed data to the frontend, and render it.

> 🧠 Concepts
> GET Routes, Eloquent ORM (READ)


##### ✅ Order a Pizza

The customer must be able to order a pizza. Include Type, Size and ingredients (in case the customer would like to customize it).

> 💡 Info
> TDLR: Create a route that sends the order to the backend and handle the logic to add it to the database.

> 🧠 Concepts
> POST Routes, Eloquent ORM (WRITE)

>  ✨BONUS
> Make it so the user earns loyality points after ordering a pizza.
> Customer could order multiple pizzas

##### ✅ (Staff)  List orders

List all orders for the staff to see.
Staff/Cooks can open order details by pressing the order.
Staff/Cooks can claim orders so other cooks don't cook the same order twice.
If a staff/cook claims the order, it must shown who has claimed it.
Once an order has been handed to the customer it will be marked as completed.

> 🧠 Concepts
> GET/POST Routes, Eloquent ORM (READ, UPDATE)

>  ✨BONUS
> Filter orders by Completed, Uncompleted, Claimed

##### ✅ (Customer)  List orders

A customer must be able to see the orders they have placed. Including a history of orders.


> 💡 Info
> TDLR: Create a route that sends the order to the backend and handle the logic to add it to the database.

> 🧠 Concepts
> GET Routes, Eloquent ORM (READ, UPDATE)

>  ✨BONUS
> Filter orders

##### ✨ More bonuses

Use caching for the results in order to improve performance.
Use queues ordering.
An interface for staff to add products to the menu.
Promotions and offers based on loyalty points.
Daily offers and promotions that expire with time (limited offers).
Send an email to the user after the order has been claimed or completed.

## Installation

#### XAMP
Follow instructions on https://www.apachefriends.org.
Once it is installed, start the mysql and the apache server inside xamp's interface.

#### Composer
Follow instructions on https://getcomposer.org/download

#### Laravel
Clone the repository, go inside and run:
```
composer global require laravel/installer​
```

We also recommand you to install the **"Laravel Blade Snippets"** extension in VSCode.

#### Nodejs
Follow instructions on https://nodejs.org

### Create the project

To create the project, simply run:
```
laravel new LaravelWorkshop
```

### Run the server
```
php artisan serve
```
Congratulations !!! Your first laravel website is running.

### Install Breeze to manage authentification
Go [breeze documentation](https://laravel.com/docs/11.x/starter-kits#laravel-breeze-installation) and follow the instructions.

*Reminder: we recommand you to use "Blade with Alpine" stack if you are totally new to Laravel. The rest of the configuration does not really matters for this workshop.*

At this point, should now be able to see a "Login" and a "Register" button on the top right part of your page.


**From now on, we recommand you to check out the [laravel documentation](https://laravel.com/docs/11.x/) every time you want to create something. It is very well written so take it to your advantage**

### Set up the database
Now that you have a login/register page, you should create and connect your database to keep the users credentials. To do so, open phpMyAdmin by going to http://localhost/phpmyadmin/ in your browser and create a new database. Once you did it, go to the [laravel documentation to configure mysql database](https://laravel.com/docs/11.x/sail#mysql). The default setup to connect xamp databases should approximatively look like this: 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=
```
If the setup is correct, running ```php artisan migrate``` should automaticly create some tables visible in phpMyAdmin.

### You are ready
It looks like you are ready to code yourself now. Take the given views in the github repo and place them in ```ressources/views```. Replace the web.php file and replace the existing one in ```ressources/routes/web.php```.

It could be a good idea to start by create a [Model](https://laravel.com/docs/11.x/eloquent#generating-model-classes) named Pizza to correctly display the menu. Each pizza should have at least a name, a description, a price, a size (either Individual, Medium or Familial). It would also be a good idea to create migration files for this pizza.

## That's all, good luck !! 🍀🍀

*PS: don't forget that the [Laravel Doc](https://laravel.com/docs/11.x/) is your best friend* 
