# Laravel Pizza Ordering App

A simple pizza ordering application built with Laravel. This app allows users to browse a menu, add items to the cart, place orders, and manage their order history. It also includes user authentication, allowing users to view and manage their orders.

## Features

-   **User Authentication**: Register and login users with Laravel Breeze.
-   **Menu Display**: Users can view the pizza menu and add items to their cart.
-   **Cart Functionality**: Items can be added to the cart with quantity control. Users can remove or adjust quantities.
-   **Order Placement**: Users can place orders based on their cart, with a checkout process.
-   **Order History**: Users can view their past orders, including the status of each order.
-   **Cancel Orders**: Pending orders can be canceled before they are processed.
-   **Order Status**: Orders have different statuses such as "pending", "cancelled", etc.

## Prerequisites

Before you begin, ensure you have the following installed:

-   PHP >= 7.4
-   Composer
-   Laravel 8.x or higher
-   MySQL or any other database supported by Laravel

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/pizza-ordering-app.git
    cd pizza-ordering-app
    ```

2. Install the required dependencies:

    ```bash
    composer install
    ```

3. Set up your environment file:

    ```bash
    cp .env.example .env
    ```

4. Configure your database settings in the `.env` file.

5. Generate the application key:

    ```bash
    php artisan key:generate
    ```

6. Run database migrations:

    ```bash
    php artisan migrate
    ```

7. Seed the database with sample data (optional):

    ```bash
    php artisan db:seed
    ```

8. Serve the application:

    ```bash
    php artisan serve
    ```

    Your app should now be accessible at `http://localhost:8000`.

## Usage

-   **Register / Login**: Use the built-in authentication system powered by Laravel Breeze.
-   **Browse the Menu**: Navigate to the menu page to view available pizzas and add them to your cart.
-   **Add to Cart**: Click "Add to cart" for a pizza item, and manage quantities once added.
-   **Place an Order**: After filling the cart, go to the checkout page to place an order.
-   **View Orders**: On the "Your Orders" page, users can view the status of their orders. Orders with "pending" status can be canceled.

## Customization

-   **Pizza Menu**: Modify the `menu` database table to change the available pizza items.
-   **Order Status**: You can adjust the logic for handling different order statuses within the `OrderController`.

## Testing

For testing the app, you can use Laravel's built-in testing features. Ensure you have a test database set up and run:

```bash
php artisan test
```
