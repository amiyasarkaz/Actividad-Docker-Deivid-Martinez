CREATE DATABASE IF NOT EXISTS demo;
USE demo;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL
);

INSERT INTO users (nombre) VALUES ('Mon3tr'), ('Laevatain'), ('Kakekuri');
