CREATE DATABASE todos;

CREATE TABLE todos(
    id SERIAL PRIMARY KEY,
    description VARCHAR(100) NOT NULL;
);

CREATE TABLE login_user ( 
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	nombre VARCHAR(120) NOT NULL , 
	user_name VARCHAR(20) NOT NULL , 
	pass VARCHAR(20) NOT NULL 
);