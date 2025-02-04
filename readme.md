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