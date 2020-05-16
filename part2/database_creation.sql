-- Create user named 'hotwok_customer' with password 'marsalforn' and give permissions only to those in the Data column

CREATE DATABASE assignment

CREATE TABLE type (
    id serial PRIMARY KEY,
	name char(50) NOT NULL
)

INSERT INTO `type`(`name`) VALUES ('Starters'), ('Vegetables'), ('Main Course'), ('Dessert')

CREATE TABLE category (
    id serial,
    name char(50) PRIMARY KEY,
    type bigint UNSIGNED NOT NULL,
    FOREIGN KEY (type) REFERENCES type(id)
)

INSERT INTO `category`(`name`, `type`) VALUES ('Starters','1'), ('Vegetables','2'), ('Chicken','3'), ('Beef','3'), ('Pork','3'), ('Duck','3'), ('Fish','3'), ('Noodles','3'),('Rice','3'), ('Dessert','4');

CREATE TABLE menu (
    id serial PRIMARY KEY,
    name char(50) NOT NULL,
    category bigint UNSIGNED NOT NULL,
    ingredients text(500) NOT NULL,
    description text(500),
    FOREIGN KEY (category) REFERENCES category(id)
)