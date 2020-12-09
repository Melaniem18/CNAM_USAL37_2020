drop database if exists usal37_agence;

create database usal37_agence default character set 'utf8mb4' collate 'utf8mb4_unicode_ci';

use usal37_agence;

create table countries
(
	country_code char(2) primary key,
    country_name varchar(128) not null
);

create table cities
(
city_code int primary key auto_increment,
city_name varchar(128) not null,
country_code char(2) not null
);

create table trips
(
trip_code int primary key auto_increment,
trip_title varchar(128) not null,
trip_avaible int not null,
trip_start datetime not null,
trip_end datetime not null,
trip_price decimal(7,2) not null,
trip_overview text not null,
trip_description mediumtext null,
city_code int not null,
index(trip_title)
);

create table themes
(
theme_code int primary key auto_increment,
theme_name varchar(32) not null unique,
theme_description mediumtext null
);

create table trips_themes
(
trip_code int,
theme_code int,
primary key (trip_code, theme_code)
);

create table services
(
service_code int primary key auto_increment,
service_name varchar(32) not null unique,
service_description mediumtext null
);

-- contraintes de clés étrangères
-- 2 sytaxes possibles
/*
alter table cities
add 
foreign key (country_code) references countries (country_code);
*/

alter table cities
add constraint fk_cities_countries 
foreign key (country_code) references countries (country_code); 

alter table trips
add constraint fk_trips_cities 
foreign key (city_code) references cities(city_code);


insert into countries
(country_code, country_name)
values
("FR","France"),
("DE","Allemagne"),
("BE","Belgique"),
("IT","Italie"),
("MA","Maroc"),
("UA","Ukraine"),
("GB","Ecosse");

insert into cities
(city_name, country_code)
values
("Paris","FR"),
("Mulhouse","FR"),
("Rust","DE"),
("Bruxelles","BE"),
("Milan","IT"),
("Chernobyl","UA"),
("Edimbourg","GB"),
("Marrakech","MA");

insert into trips
(trip_title, 
trip_avaible, 
trip_start, 
trip_end, 
trip_price, 
trip_overview, 
trip_description,
city_code
)
values
("Séjour touristique", "100", "2020-12-23 10:30:00", "2020-12-30 17:45:00", "899", "Visiter Marrakech", "Trip1 description", 8),
("Séjour gastronomique", "23", "2020-12-01 12:30:00", "2020-12-06 10:30:00", "399", "Découvrer nos meilleurs restaurants", null, 2),
("Voyage Aventure", "12", "2021-05-11 08:00:00", "2021-05-14 18:30:00", "1299", "Aventurez-vous dans Chernobyl", "Trip3 descripton", 7),
("Destination Vert-Bouteille", "234", "2020-11-17 09:15:00", "2020-11-16 13:45:00", "849", "Evadez-vous dans la ville d'Edimbourg", "Trip4 description", 8),
("Europa Park", "564", "2019-10-12 08:00:00", "2019-10-14 19:00:00", "99", "Amusez-vous dans le parc de loisir Europa Park", null, 3);

insert into themes
(theme_name)
values
('Montagne'),
('Plage'),
('Ski'),
('Balnéo'),
('Aventure');

insert into trips_themes
(trip_code, theme_code)
values
(1, 2), /* 1-1*/
(1, 3), /* 1-3*/
(3, 2); /* 3-2*/


select * from cities;
select * from countries;

select * from trips where trip_start > '2021-05-01';

select city_name, countries.country_code, country_name
from cities
join countries on cities.country_code = countries.country_code;


select trip_title, trip_avaible, trip_start, trip_end, trip_price, trip_overview, trip_description, city_code
from trips
where trip_end < now();

select trip_title, trip_avaible, trip_start, trip_end, trip_price, trip_overview, trip_description, trips.city_code, city_name
from trips
join cities on trips.city_code = cities.city_code
where city_name="Mulhouse";

select trip_code, trip_title, trip_avaible, trip_start, trip_end, trip_price, trip_overview, trip_description, trips.city_code, city_name, cities.country_code, country_name
from trips
join cities on trips.city_code = cities.city_code
join countries on cities.country_code = countries.country_code;

