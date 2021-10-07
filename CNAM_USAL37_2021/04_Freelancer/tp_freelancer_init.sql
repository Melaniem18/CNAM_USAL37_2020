drop database if exists tp_freelancer;

create database tp_freelancer default character set 'utf8mb4' collate'utf8mb4_unicode_ci';

use tp_freelancer;

create table customers
(
customer_id int auto_increment primary key,
customer_name varchar(100) not null,
customer_email varchar(255) not null,
cat_id int not null
);

create table jobs
(
job_id int auto_increment primary key,
job_state char(10) not null,
job_title varchar(100) not null,
job_start datetime not null,
job_end datetime not null,
job_description text null,
customer_id int not null
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
quote_final_amount int null,
job_id int not null
);

alter table customers
add foreign key (cat_id) references customers(cat_id);

alter table  jobs
add foreign key (quote_id) references quotes(quote_id);

alter table quotes
add foreign key (job_id) references jobs(job_id);
