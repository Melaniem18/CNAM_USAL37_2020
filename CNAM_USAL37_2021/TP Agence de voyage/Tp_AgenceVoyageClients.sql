use usal37_agence;

create table sales
(
com_code char(5) primary key,
com_name varchar(64) not null,
com_password char(60) not null
);

create table clients 
(
client_id int primary key auto_increment,
client_lastname varchar(32) not null,
client_firstname varchar(32) not null,
client_email varchar(128) not null,
client_phone char(16) not null,
client_added date not null,
client_password char(60) not null,
com_code char(5) not null,
foreign key (com_code) references sales(com_code)
);

insert into sales
(com_code, com_name, com_password)
values
('AA111', "Dupond Jean", "mdp"),
('BB222', "Martin Sophie", "mdp"),
('CC333', "Richard Michel", "mdp"),
('DD444', "Dubois Marie", "mdp"), 
('ED555', "Durand Thomas", "mdp");

insert into clients
(com_code, client_lastname, client_firstname, client_email, client_phone, client_added, client_password)
values
("AA111", "Rivière", "Charles", "rivierecharles@mail.com", "+33676247192", NOW(), "azerty"),
("ED555", "Meunier", "Paulette", "meunierpaulette@mail.com", "+33672841132", NOW(), "azerty"),
("DD444", "Boulanger", "Océane", "boulangeroceane@mail.com", "+33624347122", NOW(), "azerty"),
("BB222", "Chevalier", "Pierre", "chevalierpierre@mail.com", "+33664844162", NOW(), "azerty"),
("CC333", "Roger", "Lucas", "rogerlucas@mail.com", 			"+33654647132", NOW(), "azerty");

select client_email, client_password from clients;
select client_id, client_lastname, client_email, client_phone, client_added, com_code from clients;


SELECT * FROM clients
join sales on clients.com_code = sales.com_code;


