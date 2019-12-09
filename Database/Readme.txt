Make a database with the name of : turkey and import turkeu.sql into the database 'turkey'

OR

Use SQL quary:

CREATE DATABASE turkey;

CREATE TABLE admin (
    a_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    a_first varchar(128) not null,
    a_last varchar(128) not null,
    a_gender varchar(6) not null,
    a_cell varchar(16) not null,
    a_address varchar(256) not null,
    a_position varchar(80) not null,
    a_user varchar(64),
    a_pwd varchar(64) not null
);

CREATE TABLE employee (
    e_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    e_first varchar(128) not null,
    e_last varchar(128) not null,
    e_gender varchar(8) not null,
    e_cell varchar(16) not null,
    e_address varchar(256) not null,
    e_position varchar(80) not null,
    e_salary int(11) not null,
    e_join date not null
);

CREATE TABLE items (
    item_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    item_name varchar(128) not null,
    item_type varchar(128) not null,
    item_price int(11) not null,
    item_quantity int(11) not null
);

INSERT INTO `items` (`item_id`, `item_name`, `item_type`, `item_price`, `item_quantity`) VALUES (NULL, '1 Week', 'Turkey Chicks', '500', '50'), (NULL, '2 Weeks', 'Turkey Chicks', '600', '50'), (NULL, '3 Weeks', 'Turkey Chicks', '700', '50'), (NULL, 'Less Than 1 Month', 'Turkey Chicks', '800', '50'), (NULL, '1-2 Month', 'Turkey Chicks', '1500', '50'), (NULL, '2-3 Month', 'Medium Turkey', '2000', '50'), (NULL, '3-4 Month', 'Medium Turkey', '2500', '50'), (NULL, '4-5 Month', 'Medium Turkey', '3000', '50'), (NULL, '5-6 Month', 'Adult Turkey', '3500', '50'), (NULL, '6-7 Month', 'Adult Turkey', '4000', '50'), (NULL, '7-8 Month', 'Adult Turkey', '4200', '50'), (NULL, '1 Egg', 'Egg', '150', '50'), (NULL, '1 Egg', 'Egg', '150', '50'), (NULL, '12 Egg', 'Egg', '1500', '50'), (NULL, '50 Egg', 'Egg', '150', '50'), (NULL, '100 Egg', 'Egg', '10000', '50'), (NULL, '1 KG', 'Meat', '550', '50'), (NULL, '5 KG', 'Meat', '2700', '50'), (NULL, '20 KG', 'Meat', '10500', '50'), (NULL, '30 KG', 'Meat', '15500', '50'), (NULL, '40 KG', 'Meat', '20000', '50');

UPDATE `items` SET `item_quantity` = '250' WHERE `items`.`item_type` = 'Egg';

UPDATE `items` SET `item_quantity` = '100' WHERE `items`.`item_type` = 'Meat';


CREATE TABLE message (
    mgs_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    mgs_name varchar(128) not null,
    mgs_cell varchar(20) not null,
    mgs_email varchar(80) not null,
    mgs varchar(384) not null
);


INSERT INTO `message` (`mgs_id`, `mgs_name`, `mgs_cell`, `mgs_email`, `mgs`) VALUES (NULL, 'Bokul Miya', '+8801714961590', 'bokul@miya.com', 'A testing.');

INSERT INTO `employee` (`e_id`, `e_first`, `e_last`, `e_gender`, `e_cell`, `e_address`, `e_position`, `e_salary`, `e_join`) VALUES (NULL, 'Khurshid', 'Alam', 'Male', '+8801234567890', 'Gopalganj', 'Accountant', '30000', '2017-12-05');

INSERT INTO `employee` (`e_id`, `e_first`, `e_last`, `e_gender`, `e_cell`, `e_address`, `e_position`, `e_salary`, `e_join`) VALUES (NULL, 'Borun', 'Das', 'Male', '+8801234127890', 'nator', 'Advisor', '25000', '2016-10-04');

INSERT INTO `admin` (`a_id`, `a_first`, `a_last`, `a_gender`, `a_cell`, `a_address`, `a_position`, `a_user`, `a_pwd`) VALUES (NULL, 'Almarufuzzaman', 'Sajal', 'Male', '+8801677594039', 'North Kamalapur, Motijheel, Dhaka-1217;', 'Manager', 'admin1', 'admin1');