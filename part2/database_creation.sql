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
    price char(10) NOT NULL,
    image text(500) NOT NULL,
    FOREIGN KEY (category) REFERENCES category(id),
    FOREIGN KEY (type) REFERENCES type(id)
)

INSERT INTO `menu` (`id`, `name`, `category`, `type`, `ingredients`, `description`, `price`, `image`) VALUES
(1, 'Seaweed Egg soup', 9, 1, 'Seaweed, Sesame Oil, Eggs, Chopped Scallions', 'A healthy home-style Chinese soup served hot', '€3.65', 'assets/images/menu/seaweed-egg-soup.jpg'),
(2, 'Fried Dumplings', 9, 1, 'Chopped bok choy leaves, Chopped green onion, Soy sauce, Ground pork, Sesame oil', 'Pan fried pork and vegetable dumplings served with our home made dipping sauce', '€5.85', 'assets/images/menu/fried-dumplings.jpg'),
(3, 'Mix Platter', 9, 1, 'Fried dumplings, Spring rolls, Chicken wings, Crispy wontons', 'Platter served with variety of Chinese selections to be shared', '€5.85', 'assets/images/menu/mix-platter.jpg'),
(4, 'Lettuce in Oyster Sauce', 10, 2, 'Lettuce, Oyster sauce, Soy sauce, Garlic', 'A classic Chinese dish with lettuce topped with tasty oyster sauce', '€3.95', 'assets/images/menu/lettuce-in-oyster-sauce.jpg'),
(5, 'Chinese Cabbage', 10, 2, 'Chopped cabbage, Peanut oil, Dried chili pepper, Soy sauce', 'This stir-fried cabbage is a healthy and delicious side best served alongside other dishes', '€3.95', 'assets/images/menu/chinese-cabbage.jpg'),
(6, 'Sweet and Sour Chicken', 2, 3, 'Chicken breast, Sweet and sour sauce, Soy sauce', 'Chicken coated with our special sweet and sour sauce', '€6.95', 'assets/images/menu/sweet-and-sour-chicken.jpg'),
(7, 'Chicken with Chilli and Cashew Nuts', 2, 3, 'Chicken breast, Garlic, Onions, Red chilies, Cashew nuts', 'Chicken topped with a hot chilli sauce and cashew nuts', '€8.95', 'assets/images/menu/chicken-with-chilli-and-cashew-nuts.jpg'),
(8, 'Lemon Chicken', 2, 3, 'Chicken breast, Garlic, Soy sauce, Lemon, Honey', 'Chicken topped with delicious chinese lemon sauce garnished with sesame seeds', '€6.95', 'assets/images/menu/lemon-chicken.jpg'),
(9, 'Curry Beef', 1, 3, 'Sliced beef, White onion, Carrot, Curry', 'Sliced pieces of beef topped with curry sauce, best served with a side of rice', '€6.95', 'assets/images/menu/curry-beef.jpg'),
(10, 'Crispy Japanese Beef', 1, 3, 'Crispy beef, Sesame seeds, Garlic, Ginger, Soy sauce, Sweet and sticky sauce', 'Crispy beef pieces topped with a delicious sweet sauce and toasted sesame seeds', '€8.95', 'assets/images/menu/crispy-japanese-beef.jpg'),
(11, 'Chinese shui zhu Beef', 1, 3, 'Beef, Bean sprouts, Green onions, Chilli pepper, Garlic', 'Sichuan style water boiled beef cooked in hot red broth', '€12.00', 'assets/images/menu/chinese-shui-zhu-beef.jpg'),
(12, 'Honey pork', 7, 3, 'Pork chops, Garlic, Honey, White vinegar', 'Pork chops marinated in honey sauce', '€7.95', 'assets/images/menu/honey-pork.jpg'),
(13, 'Sizzling Pork', 7, 3, 'Pork, Garlic, Sliced celery, Mushrooms, Green onions', 'Stir-fried sizzling pork pieces topped with mushrooms and fresh celery', '€9.95', 'assets/images/menu/sizzling-pork.jpg'),
(14, 'Quarter Duck', 4, 3, 'Duck legs, Soy sauce, Oyster sauce, Ginger, Garlic', 'Chinese duck legs cooked in a mixture of stock, soy sauce, oyster sauce, sesame oil, and aromatics', '€8.50', 'assets/images/menu/quarter-duck.jpg'),
(15, 'Half Duck', 4, 3, 'Duck, Soy sauce, Oyster sauce, Ginger, Garlic', 'Half duck served with a mixture of sauces', '€14.00', 'assets/images/menu/half-duck.jpg'),
(16, 'Crispy Fish in Garlic Sauce', 5, 3, 'Fish fillet, Garlic butter sauce, Lemon, Garlic, Chopped parsley', 'Pan-fried fish fillets with garlic butter sauce topped with parsley', '€8.95', 'assets/images/menu/crispy-fsh-in-garlic-sauce.jpg'),
(17, 'Hot Wok Special Shrimps', 5, 3, 'Shrimps, Oyster sauce, Soy sauce, Garlic, Ginger, Green onion', 'Our special recipe with perfectly cooked shrimp topped with oyster sauce and soy sauce', '€13.95', 'assets/images/menu/hot-wok-special-shrimps.jpg'),
(18, 'Noodles with Vegetables', 6, 3, 'Egg noodles, Garlics, Mushrooms, Bell pepper, Carrots, Peas, Soy sauce, Ginger', 'Delicious egg noodles mixed with vegetables and our home made soy sauce', '€3.95', 'assets/images/menu/noodles-with-vegetables.jpg'),
(19, 'Curry Shrimp Noodles', 6, 3, 'Rice noodles, Cocktail shrimp, Peanut oil, Oyster sauce, Soy sauce, Curry, Green onion', 'Rice noodles mixed with shrimps and curry sauce cooked in peanut oil', '€6.95', 'assets/images/menu/curry-shrimp-noodles.jpg'),
(20, 'Chicken & Beef Mix Noodles', 6, 3, 'Chicken pieces, Beef pieces, Soy sauce, Ginger, Garlic, Noodles, Carrots, Sesame seeds', 'Noodles dish with a mixture of chicken and beef pieces cookes with soy sauce and topped with toasted sesame seeds', '€5.95', 'assets/images/menu/chicken-n-beef-mix-noodles.jpg'),
(21, 'Egg Fried Rice', 8, 3, 'Fried rice, Eggs, Peanut oil, Red onion, Soy sauce', 'Plain egg fried rice best served alongside other dishes', '€2.95', 'assets/images/menu/egg-fried-rice.jpg'),
(22, 'Beef Fried Rice', 8, 3, 'Beef pieces, Carrots, Garlic, Peas, Fried rice, Soy sauce, Oyster sauce', 'Fried rice mixed with beef pieces, carrots and peas cooked in oyster sauce and soy sauce', '€3.95', 'assets/images/menu/beef-fried-rice.jpg'),
(23, 'Seafood fried rice', 8, 3, 'Seafood mix, Fried rice, Oyster sauce, Garlic', 'Fried rice with a mixture of different seafood cooked in oyster sauce', '€8.95', 'assets/images/menu/seafood-fried-rice.jpg'),
(24, 'Fried Banana Ice Cream', 3, 4, 'Sliced bananas, Cinnamon, Vanilla ice cream', 'Our most recommended desert is the warm fried banana ice cream topped with some cinnamon spice', '€2.95', 'assets/images/menu/fried-banana-ice-cream.jpg'),
(25, 'Fried Pineapple Ice Cream', 3, 4, 'Sliced pineapple, Vanilla ice cream, Amaretto, Honey', 'The fried pineapple ice cream is topped with delicious Amaretto liqueur', '€2.95', 'assets/images/menu/fried-pineapple-ice-cream.jpg')

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