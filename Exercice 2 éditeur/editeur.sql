
-- Supprimer la base de données usal37_editeur 
DROP DATABASE IF EXISTS usal37_editeur;

-- Créer la base de données usal37_editeur 
CREATE DATABASE IF NOT EXISTS usal37_editeur;

-- Sélectionner la base de données 
USE usal37_editeur;

-- Créer la table 
CREATE TABLE shops
(
	shop_name VARCHAR(50) PRIMARY KEY,
    shop_address VARCHAR(255) NOT NULL
);

CREATE TABLE books
(
	book_isbn CHAR(20) PRIMARY KEY,
    book_tittle VARCHAR(255) NOT NULL,
    book_price DECIMAL(5,2) NOT NULL,
    book_reward VARCHAR(255) NULL
);

CREATE TABLE editions
(
edition_isbn CHAR(20) PRIMARY KEY,
edition_date DATE NOT NULL,
edition_order TINYINT UNSIGNED NOT NULL,
edition_nb INT UNSIGNED NOT NULL,
book_isbn CHAR(20) NOT NULL,
FOREIGN KEY (book_isbn) REFERENCES books(book_isbn)
);

CREATE TABLE authors
(
author_lastname VARCHAR(50),
author_firstname VARCHAR(50),
author_pseudo VARCHAR(50) NULL,
author_percentage INT NOT NULL,
PRIMARY KEY (author_lastname, author_firstname)
);

INSERT INTO shops
(shop_name, shop_address)
VALUES
('Magasin 1', '11 rue de Paris' ),
('Magasin 2', '11 rue de Mulhouse' ),
('Bookshop 3', '22 rue de Paris' ),
('Magasin 4', '33 rue de Strasbourg' );


INSERT INTO books
(book_isbn, book_tittle, book_price, book_reward)
VALUES
('2020A', "L'orientalisme", 19.99, NULL),
('2019A', "One Piece", 6.99, 'Manga 2019'),
('1920A', "Le langage SQL par la pratique", 39, NULL),
('2007A', "Le Horla", 9.50, NULL);


INSERT INTO books
VALUES
('1954B', 'Bambi', 29.50, 'Goncourt');

INSERT INTO editions
(edition_isbn, edition_date, edition_order, edition_nb, book_isbn)
VALUES
('AAAA', '2018-02-25', 1, 150, '2020A'),
('AAAB', '2019-10-02', 2, 207, '2020A');


SELECT * FROM books;
SELECT * FROM shops;
SELECT * FROM editions;






