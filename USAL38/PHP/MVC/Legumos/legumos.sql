DROP DATABASE IF EXISTS db_legumos;

CREATE DATABASE db_legumos DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

use db_legumos;

CREATE TABLE Vegetables(
   Id INT,
   `Name` VARCHAR(50) NOT NULL,
   Variety VARCHAR(50) NOT NULL,
   PrimaryColor VARCHAR(20) NOT NULL,
   LifeTime INT NOT NULL,
   Fresh INT NOT NULL DEFAULT 0,
   PRIMARY KEY(Id)
);

CREATE TABLE Sales(
   SaleId INT PRIMARY KEY AUTO_INCREMENT,
   SaleDate DATE NOT NULL,
   SaleWeight INT NOT NULL,
   SaleUnitPrice DECIMAL(5,2) NOT NULL,
   SaleActive INT NOT NULL DEFAULT 1,
   VegetableId INT NOT NULL,
   FOREIGN KEY(VegetableId) REFERENCES Vegetables(Id)
);


INSERT INTO Vegetables 
(Id, `Name`, Variety, PrimaryColor, LifeTime, Fresh) 
VALUES 
(1, "carotte", "de colmar", "orange", "35", 0),
(2, "broccoli", "belstar", "green", "5", 1),
(3, "aspèrge", "apollo", "green", "4", 1),
(4, "concombre", "marcel", "green", "10", 0),
(5, "laitue", "Arugula ", "green", "10", 1),
(6, "Pomme de terre", "agria", "yellow", "28", 0),
(7, "tomate", "cherry", "orange", "7", 0),
(8, "radis", "watermelon", "blanc", "10", 1),
(9, "artichaux", "globuleux", "vert clairn", "5", 1);

INSERT INTO Sales 
(SaleDate, SaleWeight, SaleUnitPrice, VegetableId) 
VALUES 
("2020/04/21", 5, 3.5, 1),
("2020/11/01", 10, 10.5, 2),
("2020/06/29", 5, 7.2, 3),
("2020/09/18", 1, 2.6, 9),
("2020/02/25", 4, 9.8, 8),
("2020/08/11", 3, 6.5, 7),
("2020/09/20", 7, 4.6, 5),
("2020/04/12", 6, 3.9, 4),
("2020/10/17", 5, 7.2, 3),
("2020/01/06", 3, 7.2, 3),
("2020/01/06", 8, 3.5, 1),
("2020/01/06", 3, 3.5, 1);


SELECT * FROM Vegetables;
SELECT * FROM Sales;

SELECT * 
FROM Sales 
INNER JOIN Vegetables ON Sales.VegetableId = Vegetables.Id
ORDER BY Sales.SaleDate DESC, Vegetables.Id ASC; 