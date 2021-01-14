drop database usal37_repartout;

create database usal37_repartout default char set 'utf8mb4' collate 'utf8mb4_unicode_ci';

use usal37_repartout;

create table customers
(
customer_id int auto_increment,
customer_lastname varchar(50) not null,
customer_firstname varchar(50) not null,
customer_address varchar(255) not null,
customer_phone char(16) not null
);

create table categories
(
cat_id int auto_increment,
cat_name varchar(32) not null,
primary key(cat_id)
);

create table mechanics
(
mecha_id int auto_increment,
mecha_lastname varchar(50) not null,
mecha_firstname varchar(50) not null,
cat_id int not null,
primary key(mecha_id),
foreign key (cat_id) references categories(cat_id)
);

create table repairs
(
repair_date_start datetime not null,
repair_duration time not null,
repair_price decimal(8,2) not null,
customer_id int,
cat_id int,
mecha_id int,
primary key(customer_id, cat_id, mecha_id)
);

alter table repairs
add constraint fk_repairs_customers foreign key (customer_id) references customers(customer_id),
add constraint fk_repairs_categories foreign key (cat_id) references categories(cat_id),
add constraint fk_repairs_mechanics foreign key (mecha_id) references mechanics(mecha_id);