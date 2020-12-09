use usal37_agence;

create table themes
(
theme_code int primary key auto_increment,
theme_name varchar(32) not null,
theme_descrption text
);

create table services
(
service_code int primary key auto_increment,
service_name varchar(32) not null,
service_description text null,
service_score char(1) not null,
service_commentaire varchar(255) null
);