drop database if exists eval212_garage;

create database eval212_garage default character set 'utf8mb4' collate'utf8mb4_unicode_ci';

use eval212_garage;

create table clients
(
client_id int primary key auto_increment,
client_lastname varchar(50) not null,
client_firstname varchar(50) not null,
client_address varchar(255) not null,
client_phone varchar(16) not null
);

create table repairs
(
repair_id int primary key auto_increment,
repair_supported datetime not null,
repair_duration time not null,
repair_price int not null,
repair_category varchar(32) not null,
 mechanic_name varchar(100) not null,
client_id int not null,
foreign key (client_id) references clients(client_id),
foreign key (mechanic_name) references mechanics(mechanic_name)
);

create table mechanics
(
mechanic_name varchar(100) primary key,
mechanic_repair varchar(50) not null,
mechanic_hours datetime not null,
mechanic_speciality varchar(32) not null,
repair_id int not null
);



