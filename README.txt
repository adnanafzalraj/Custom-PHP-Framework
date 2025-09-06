# Custom PHP MVC Framework

A lightweight custom "PHP MVC Framework" built from scratch using "OOP" principles.  
This project follows the "Model-View-Controller" (MVC) architecture to keep code clean, organized, and scalable. 

Learning Purpose : To understand MVC and OOP in PHP. 

## Features
- "MVC Architecture" separates logic, UI, and data
- OOP-based structure
- "Routing system" maps URL to controllers
- "Controllers & Views" for handling requests and responses
- "Models" for database interactions extendable
- Lightweight and easy to customize

## Project Structure
project-root/
│── app/
│   ├── Controllers/
│   ├── Models/
│   └── Views/
│── core/
│   ├── App.php        # Main application class
│   ├── Controller.php # Base controller
│   └── Database.php   # Database connection (if added)
│── public/
│   └── index.php      # Entry point
│── .htaccess          # URL rewriting

Credit: AJAY YADAV : https://www.youtube.com/watch?v=BI_fXe8DnDg&list=PLT51dtioU1pOCka0jIwYYaIGhPct3El_i&index=15


## Requirements
- PHP 7.3.11+  
- MySQL Database  
- Apache/Nginx Server  

## Setup
1. Clone the repo:
   git clone https://github.com/adnanafzalraj/Custom-PHP-Framework.git
2. Import the `authdb.sql` file into MySQL.  
3. Update database credentials in `app\Config\Database.php`.  
4. Run the project in your browser:  
   
   http://localhost/Custom-PHP-Framework/login.php

## Usage
- Add your routes inside routes/route.php.
- Create controllers inside app/Controllers.
- Add views inside /page.
- Use models for database logic (app/Models). 

## License
MIT License
