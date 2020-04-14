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
  
  
  The Registration system after running on localhost looks like :
  
  ![1](https://user-images.githubusercontent.com/41967963/79195815-90318480-7e4c-11ea-8f15-c7bc5903191f.png)
  
  ![5](https://user-images.githubusercontent.com/41967963/79195852-a0e1fa80-7e4c-11ea-89ee-63d1b3ef2613.png)
  
  ![4](https://user-images.githubusercontent.com/41967963/79195916-b820e800-7e4c-11ea-8b76-87f9cf9e02ce.png)


  
  
  
