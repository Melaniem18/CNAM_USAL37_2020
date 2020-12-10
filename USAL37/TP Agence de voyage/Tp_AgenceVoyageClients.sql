use usal37_agence;

create table sales
(
com_code varchar(5) primary key,
com_name varchar(64) not null,
com_password varchar(60) not null
);

create table clients
(
client_id int primary key auto_increment,
client_lastname varchar(32) not null,
client_firstname varchar(32) not null,
client_email varchar(128) not null,
client_phone varchar(16) not null,
client_added date not null,
client_password varchar(60) not null,
foreign key (com_code) references sales(com_code)
);

insert into sales
(com_code, com_name)
values
(11), ("Dupond Jean"),
(22), ("Martin Sophie"),
(33), ("Richard Michel"),
(44), ("Dubois Marie"),
(55), ("Durand Thomas");

insert into clients
(client_id, client_lastname, client_firstname, client_email, client_phone, client_added,com_code)
values
(1), ("Rivière"), ("Charles"), ("rivierecharles@mail.com"), ("+336 76 24 71 92"), (2020-09-22), (22),
(2),("Meunier"), ("Paulette"), ("meunierpaulette@mail.com"), ("+336 72 84 11 32"), (2019-11-19), (44),
(3),("Boulanger"), ("Océane"), ("boulangeroceane@mail.com"), ("+336 24 34 71 22"), (2018-10-11), (55),
(4),("Chevalier"), ("Pierre"), ("chevalierpierre@mail.com"), ("+336 64 84 41 62"), (2020-12-10), (11),
(5),("Roger"), ("Lucas"), ("rogerlucas@mail.com"), ("+336 54 64 71 32"), (2020-02-11), (33);

SELECT * FROM clients
JOIN sales ON clients.com_name = sales.com_name