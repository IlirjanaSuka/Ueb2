-- Create a new database
CREATE DATABASE ueb2;
USE ueb2;

-- Create the 'users' table
CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  email VARCHAR(255),
  password VARCHAR(255)
);

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
  status VARCHAR(255)
);

-- Create the 'products' table
CREATE TABLE products (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  price DECIMAL(10, 2),
  image VARCHAR(255),
  date DATE,
  user_id INT,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Create the 'wishlist' table
CREATE TABLE wishlist (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  product_id INT,
  price DECIMAL(10, 2),
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Create the 'cart' table
CREATE TABLE cart (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  product_id INT,
  price DECIMAL(10, 2),
  qty INT,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (product_id) REFERENCES products(id)
);
