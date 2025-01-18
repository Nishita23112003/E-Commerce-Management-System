# E-Commerce Platform

This project is a basic e-commerce platform that allows users to browse products, log in, manage their cart, and perform CRUD (Create, Read, Update, Delete) operations on products. The application is built using PHP and MySQL, hosted on an XAMPP server.

---

## Features

### 1. Homepage 🏠
- Displays available products with their details.
- Provides navigation options for the user.

### 2. User Authentication 🔒
- Login page for registered users.
- Ensures secure access to product management and cart features.

### 3. Product Management 🛠️
- Admin functionality to:
  - Add new products.
  - Edit existing product details (name, price, description, etc.).
  - Delete products.

### 4. Shopping Cart 🛒
- Add products to the cart from the homepage.
- Increase or decrease the quantity of products in the cart.
- Remove items from the cart.

### 5. Database 💾
- MySQL database to store user information, product details, and cart data.

---

## Technologies Used
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Server**: XAMPP

---

## Setup Instructions

### Prerequisites
- Install [XAMPP](https://www.apachefriends.org/index.html) on your system.
- Clone this repository to your local machine.

### Steps

1. **Clone the Repository** 🖥️  
   Open your terminal and run:  
   ```bash
   git clone https://github.com/your-username/e-commerce-platform.git
   cd e-commerce-platform

2. Move Project to XAMPP Folder 📂
   - Copy the project folder
   - Paste it into the htdocs directory of your XAMPP installation.

3. Start XAMPP Server 🚀
   - Open the XAMPP Control Panel.
   - Start the Apache and MySQL modules.

4. Create the Database 🗂️
   - Open phpMyAdmin.
   - Create a database named ecommerce.
   - Import the ecommerce.sql file from the project folder to set up the required tables.
   
6. Run the Application 🌐
   - Open a browser and go to http://localhost/e-commerce-platform/.
