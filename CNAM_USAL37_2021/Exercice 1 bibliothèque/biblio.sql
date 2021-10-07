DROP DATABASE IF EXISTS usal37_biblio;

CREATE DATABASE IF NOT EXISTS usal37_biblio;

USE usal37_biblio;

CREATE TABLE clients
(
	client_id INT AUTO_INCREMENT PRIMARY KEY,
	client_lastname VARCHAR(50) NOT NULL,
	client_firstname VARCHAR(50) NOT NULL,
	client_address VARCHAR(255) NOT NULL,
	client_bail DECIMAL(5,2) NOT NULL
);

CREATE TABLE books
(
	book_id INT AUTO_INCREMENT PRIMARY KEY,
	book_tittle VARCHAR(50) NOT NULL,
	book_editor VARCHAR(50) NOT NULL,
	book_authors VARCHAR(255) NOT NULL,
	book_date DATE,
	book_state VARCHAR(50) NOT NULL
);

CREATE TABLE books_clients
(
	book_id INT,
    client_id INT,
	borrow_date DATE NOT NULL,
	borrow_return DATE NOT NULL,
    PRIMARY KEY (book_id, client_id),
    FOREIGN KEY (book_id) REFERENCES books(book_id),
    FOREIGN KEY (client_id) REFERENCES clients(client_id)
);


INSERT INTO clients
(client_lastname, client_firstname, client_address, client_bail)
VALUES
('DEV','Mike', 'AAA', 9.50),
('Dupond','Jean', 'BBB', 4.50),
('Neymar','Jean', 'CCC', 29);

INSERT INTO books
(book_tittle, book_editor, book_date, book_state, book_authors)
VALUES
("L'orientalisme",'Hachette','1998-02-20', 'Neuf', 'Romain'),
("One pice",'Editeur1','2005-04-12', 'Légèrement abimé', 'Félix'),
("Le langage SQL par la pratique",'GOT','2010-10-02', 'OK', 'Jacques');

INSERT INTO books_clients
(book_id, client_id, borrow_date, borrow_return)
VALUES
(1, 1, '2019-11-19', '2020-11-21'),
(2, 1, '2020-11-17', '2020-11-28'),
(3, 2, '2020-11-18', '2020-11-19'),
(3, 3, '2020-11-19', NULL);

SELECT * FROM clients;
SELECT * FROM books;
SELECT * FROM books_clients;

SELECT borrow_date, borrow_return, client_lastname, client_bail, book_tittle 
FROM books_clients
JOIN clients ON books_clients.client_id = clients.client_id
JOIN books ON books_clients.book_id = books.book_id;


