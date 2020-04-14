# Simple-Registration-System
Simple Registration- Login/Signup system using HTML, CSS, PHP, and MySQL.


# Running the project

  1. Extract the zip file in the htdocs directory of apache folder(or, “/var/www/html” in case you are using linux).
  2. Goto localhost/phpMyAdmin in your web browser.
  3. Create database registration and table user by using following command :
　　      CREATE DATABASE registration;
        
　　      USE registration;
        
　　      CREATE TABLE user(
        
　　      id int not null auto increment primary key,
        
　　      username varchar(255) not null,
        
　　      email varchar(255) not null,
        
　　      password varchar(255) not null
        
　　      );
            
  4. Go to localhost/register.php for registration and localhost/login.php to login.
