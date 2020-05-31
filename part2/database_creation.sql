-- Create user named 'hotwok_customer' with password 'marsalforn' and give permissions only to those in the Data column

CREATE TABLE type (
    id serial PRIMARY KEY,
	name char(50) NOT NULL
)

INSERT INTO `type`(`name`) VALUES ('Starters'), ('Vegetables'), ('Main Course'), ('Dessert')

CREATE TABLE category (
    id serial,
    name char(50) PRIMARY KEY,
    type bigint UNSIGNED NOT NULL
    FOREIGN KEY (type) REFERENCES type(id)
)

INSERT INTO `category`(`name`, `type`) VALUES ('Starters','1'), ('Vegetables','2'), ('Chicken','3'), ('Beef','3'), ('Pork','3'), ('Duck','3'), ('Fish','3'), ('Noodles','3'),('Rice','3'), ('Dessert','4')

CREATE TABLE menu (
    id serial PRIMARY KEY,
    name char(50) NOT NULL,
    category bigint UNSIGNED NOT NULL,
    type bigint UNSIGNED NOT NULL,
    ingredients text(500) NOT NULL,
    description text(500),
    FOREIGN KEY (category) REFERENCES category(id),
    FOREIGN KEY (type) REFERENCES type(id)
)

CREATE TABLE about (
    id serial PRIMARY KEY,
    name char(50) NOT NULL,
    description char(50) NOT NULL,
	address char(50) NOT NULL,
    telephone char(50) NOT NULL,
    email char(50) NOT NULL,
    hours char (100) NOT NULL
    social char(50) NOT NULL,
)

INSERT INTO `about`(`name`, `description`,`address`,`telephone`,`email`,`hours`, `social`) VALUES ('HOT WOK', 'Chinese Restaurant','Triq ir-Rabat, Marsalforn, Ghawdex', '+356 9972 7900', 'hotwok.yu@gmail.com', 'Weekdays from 6pm to 10pm & Weekends from 6pm to 11pm', 'Facebook: https://www.facebook.com/hotwok666/')

--For Menu Table--
ALTER TABLE `menu`
ADD `price` char(10) NOT NULL

--Starters
INSERT INTO `menu` (`name`,`category`,`ingredients`,`description`,`price`) VALUES ('Seaweed Egg soup', 1, 'Seaweed, Sesame Oil, Eggs, Chopped Scallions', 'A healthy home-style Chinese soup served hot', '€3.65'), ('Fried Dumplings', 1, 'Chopped bok choy leaves, Chopped green onion, Soy sauce, Ground pork, Sesame oil', 'Pan fried pork and vegetable dumplings served with our home made dipping sauce', '€5.85'), ('Mix Platter', 1, 'Fried dumplings, Spring rolls, Chicken wings, Crispy wontons', 'Platter served with variety of Chinese selections to be shared', '€5.85')

--Vegetables
INSERT INTO `menu` (`name`,`category`,`ingredients`,`description`,`price`) VALUES ('Lettuce in Oyster Sauce', 2, 'Lettuce, Oyster sauce, Soy sauce, Garlic', 'A classic Chinese dish with lettuce topped with tasty oyster sauce', '€3.95'), ('Chinese Cabbage', 2, 'Chopped cabbage, Peanut oil, Dried chili pepper, Soy sauce', 'This stir-fried cabbage is a healthy and delicious side best served alongside other dishes', '€3.95')

--Chicken
INSERT INTO `menu` (`name`,`category`,`ingredients`,`description`,`price`) VALUES ('Sweet and Sour Chicken', 3, 'Chicken breast, Sweet and sour sauce, Soy sauce', 'Chicken coated with our special sweet and sour sauce', '€6.95'), ('Chicken with Chilli and Cashew Nuts', 3, 'Chicken breast, Garlic, Onions, Red chilies, Cashew nuts', 'Chicken topped with a hot chilli sauce and cashew nuts', '€8.95'), ('Lemon Chicken', 3, 'Chicken breast, Garlic, Soy sauce, Lemon, Honey', 'Chicken topped with delicious chinese lemon sauce garnished with sesame seeds', '€6.95')

--Beef
INSERT INTO `menu` (`name`,`category`,`ingredients`,`description`,`price`) VALUES ('Curry Beef', 4, 'Sliced beef, White onion, Carrot, Curry', 'Sliced pieces of beef topped with curry sauce, best served with a side of rice', '€6.95'), ('Crispy Japanese Beef', 4, 'Crispy beef, Sesame seeds, Garlic, Ginger, Soy sauce, Sweet and sticky sauce', 'Crispy beef pieces topped with a delicious sweet sauce and toasted sesame seeds', '€8.95'), ('Chinese shui zhu Beef', 4, 'Beef, Bean sprouts, Green onions, Chilli pepper, Garlic', 'Sichuan style water boiled beef cooked in hot red broth', '€12.00')

--Pork
INSERT INTO `menu` (`name`,`category`,`ingredients`,`description`,`price`) VALUES ('Honey pork', 5, 'Pork chops, Garlic, Honey, White vinegar', 'Pork chops marinated in honey sauce', '€7.95'), ('Sizzling Pork', 5, 'Pork, Garlic, Sliced celery, Mushrooms, Green onions', 'Stir-fried sizzling pork pieces topped with mushrooms and fresh celery','€9.95')

--Duck
INSERT INTO `menu` (`name`,`category`,`ingredients`,`description`,`price`) VALUES ('Quarter Duck', 6, 'Duck legs, Soy sauce, Oyster sauce, Ginger, Garlic', 'Chinese duck legs cooked in a mixture of stock, soy sauce, oyster sauce, sesame oil, and aromatics', '€8.50' ), ('Half Duck', 6, 'Duck, Soy sauce, Oyster sauce, Ginger, Garlic', 'Half duck served with a mixture of sauces', '€14.00')

--Fish
INSERT INTO `menu` (`name`,`category`,`ingredients`,`description`,`price`) VALUES ('Crispy Fish in Garlic Sauce', 7, 'Fish fillet, Garlic butter sauce, Lemon, Garlic, Chopped parsley', 'Pan-fried fish fillets with garlic butter sauce topped with parsley', '€8.95'), ('Hot Wok Special Shrimps', 7, 'Shrimps, Oyster sauce, Soy sauce, Garlic, Ginger, Green onion', 'Our special recipe with perfectly cooked shrimp topped with oyster sauce and soy sauce', '€13.95'), ('Mapo tofu', 7, 'Tofu, Dried red chilies, Garlic, Ginger, Spicy bean sauce, Sesame oil', 'A popular Chinese dish with tofu served very hot and delicious ', '€8.95')

--Noodles
INSERT INTO `menu` (`name`,`category`,`ingredients`,`description`,`price`) VALUES ('Noodles with Vegetables', 8, 'Egg noodles, Garlics, Mushrooms, Bell pepper, Carrots, Peas, Soy sauce, Ginger', 'Delicious egg noodles mixed with vegetables and our home made soy sauce', '€3.95'), ('Curry Shrimp Noodles', 8, 'Rice noodles, Cocktail shrimp, Peanut oil, Oyster sauce, Soy sauce, Curry, Green onion', 'Rice noodles mixed with shrimps and curry sauce cooked in peanut oil', '€6.95'), ('Chicken & Beef Mix Noodles', 8, 'Chicken pieces, Beef pieces, Soy sauce, Ginger, Garlic, Noodles, Carrots, Sesame seeds', 'Noodles dish with a mixture of chicken and beef pieces cookes with soy sauce and topped with toasted sesame seeds', '€5.95') 

--Rice
INSERT INTO `menu` (`name`,`category`,`ingredients`,`description`,`price`) VALUES ('Egg Fried Rice', 9, 'Fried rice, Eggs, Peanut oil, Red onion, Soy sauce', 'Plain egg fried rice best served alongside other dishes', '€2.95'), ('Beef Fried Rice', 9, 'Beef pieces, Carrots, Garlic, Peas, Fried rice, Soy sauce, Oyster sauce', 'Fried rice mixed with beef pieces, carrots and peas cooked in oyster sauce and soy sauce', '€3.95'), ('Seafood fried rice', 9, 'Seafood mix, Fried rice, Oyster sauce, Garlic', 'Fried rice with a mixture of different seafood cooked in oyster sauce', '€8.95')

--Dessert
INSERT INTO `menu` (`name`,`category`,`ingredients`,`description`,`price`) VALUES ('Fried Banana Ice Cream', 10, 'Sliced bananas, Cinnamon, Vanilla ice cream', 'Our most recommended desert is the warm fried banana ice cream topped with some cinnamon spice', 2.95), ('Fried Pineapple Ice Cream', 10, 'Sliced pineapple, Vanilla ice cream, Amaretto, Honey', 'The fried pineapple ice cream is topped with delicious Amaretto liqueur', 2.95)
