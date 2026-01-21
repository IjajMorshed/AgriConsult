# AgriConsult
#creat database-
  CREATE DATABASE project;
  USE project;
  CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

#Train the model-
  python --version
  python -m venv venv
  venv\Scripts\activate
  pip install tensorflow numpy
  notepad train_model.py
  python train_model.py


