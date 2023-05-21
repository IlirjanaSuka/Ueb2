-- Create a new database
CREATE DATABASE ueb2;
USE ueb2;




-- Create the 'users' table


CREATE TABLE users (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  role ENUM('admin', 'user') NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (name, email, password, role) 
VALUES ('Admin User', 'admin@example.com', 'adminpassword', 'admin');





-- Create the 'orders' table
CREATE TABLE orders (
  id INT PRIMARY KEY AUTO_INCREMENT,
  product_id INT,
  date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  price DECIMAL(10, 2),
  qty INT,
  name VARCHAR(255),
  number VARCHAR(255),
  email VARCHAR(255),
  address VARCHAR(255),
  status VARCHAR(255),
  total_price DECIMAL(10, 2),
   payment_status VARCHAR(50) NOT NULL
);



CREATE TABLE message (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  user_id INT(11) UNSIGNED NOT NULL,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  message TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- Create the 'products' table
CREATE TABLE products (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  price DECIMAL(10, 2),
  image VARCHAR(255),
  date DATE,
  user_id  INT(11) UNSIGNED,
  FOREIGN KEY (user_id) REFERENCES users(id)
);





-- Create the 'wishlist' table
CREATE TABLE wishlist (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id  INT(11) UNSIGNED,
  product_id INT,
  price DECIMAL(10, 2),
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (product_id) REFERENCES products(id)
);





-- Create the 'cart' table
CREATE TABLE cart (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id  INT(11) UNSIGNED,
  product_id INT,
  price DECIMAL(10, 2),
  qty INT,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (product_id) REFERENCES products(id)
);


CREATE TABLE IF NOT EXISTS password_resets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    token VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
