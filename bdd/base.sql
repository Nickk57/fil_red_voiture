CREATE TABLE admin(
   id INT AUTO_INCREMENT,
   name VARCHAR(50),
   first_name VARCHAR(50),
   email VARCHAR(100),
   password VARCHAR(255),
   PRIMARY KEY(id)
);

CREATE TABLE category(
   id INT AUTO_INCREMENT,
   name VARCHAR(50) NOT NULL,
   PRIMARY KEY(id)
);

CREATE TABLE product(
   id INT AUTO_INCREMENT,
   name VARCHAR(50),
   description TEXT,
   id_category INT,
   PRIMARY KEY(id),
   FOREIGN KEY(id_category) REFERENCES category(id)
);

CREATE TABLE picture(
   id INT AUTO_INCREMENT,
   name VARCHAR(50),
   path TEXT,
   id_picture INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(id_picture) REFERENCES product(id)
);
