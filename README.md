# Simple-Registration-System
Simple Registration- Login/Signup system using HTML, CSS, PHP, and MySQL.

# Project Structure
  It is a simple registration system designed using PHP, HTML, CSS, and MySQL.

### Pre-requisites:
  XAMPP( Cross platform, Apache, MySQL, PHP, Perl.
  
  phpMyAdmin(Username, password, database name-'registration')
  
### Modules:
  
  This project contains 5 separate php modules, namely, 
  
  1.) **server.php** - for connecting PHP and MySql for interaction between the form and the database.
  
  2.) **register.php** - The registration/Signup page for new user's registration.
  
  3.) **error.php** - included in both register.php and login.php to check for errors and also to check if any field is empty.
  
  4.) **login.php** - This login page asks user to enter the user name and password and validates it, if successful redirects to the index.php.
  
  5.) **index.php** - This index.php page is basically the demo homepage for the organization which displays the message which welcomes the user.
  
**Note** : Find the CSS in the separate style.css file.

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
  
  
  The Registration system after running on localhost looks like :
  
  ![1](https://user-images.githubusercontent.com/41967963/79195815-90318480-7e4c-11ea-8f15-c7bc5903191f.png)
  
  ![5](https://user-images.githubusercontent.com/41967963/79195852-a0e1fa80-7e4c-11ea-89ee-63d1b3ef2613.png)
  
  ![4](https://user-images.githubusercontent.com/41967963/79195916-b820e800-7e4c-11ea-8b76-87f9cf9e02ce.png)


  
  
  
