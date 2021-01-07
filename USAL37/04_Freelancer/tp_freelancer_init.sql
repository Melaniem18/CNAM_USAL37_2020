drop database if exists usal37_freelancer;

create database usal37_freelancer default character set 'utf8mb4_unicode_ci';

use usal37_freelancer;

create table customers
(
customer_id int auto_increment primary key,
customer_name varchar(100) not null,
customer_email varchar(255) not null
);

create table jobs
(
job_id int auto_increment primary key,
job_state char(10) not null,
job_title varchar(100) not null,
job_start datetime null,
job_end datetime null,
job_description text null
);

create table customers_cats
(
cat_id int auto_increment primary key,
cat_name varchar(50) not null,
cat_description text null
);

create table quotes
(
quote_id int auto_increment primary key,
quote_state char(10) not null,
quote_date date not null,
quote_amount int not null,
quote_final_date date null,
quote_final_amount int null
);

alter table customers
add foreign key (cat_id) references customers_cats(cat_id);

alter table  jobs
add foreign key (customer_id) references customers(customer_id);

alter table quotes
add foreign key (job_id) references jobs(job_id);
