USE usal37_editeur;

-- mettre à jour le livre 2019A, nouveau prix = 5.50
UPDATE books SET book_price=5.50 WHERE book_isbn = '2019A';

UPDATE books SET book_price=book_price-5 WHERE book_price > 20;

UPDATE books SET book_price=42, book_tittle='Le langeg SQL' WHERE book_isbn = '1920A';



DELETE FROM books WHERE book_isbn = '2007A';


SELECT * FROM books;