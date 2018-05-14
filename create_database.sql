DROP DATABASE IF EXISTS BOOK;
CREATE DATABASE BOOK;
USE BOOK;  -- MySQL command

-- create the tables
CREATE TABLE books (
  bookID       INT(11)        NOT NULL   AUTO_INCREMENT,
  bookTitle     VARCHAR(255)   NOT NULL,
  bookAuthor     VARCHAR(255)   NOT NULL,
  bookEdition     INT(3),
  bookISBN     INT(13),
  bookCondition     VARCHAR(255)   NOT NULL,
  bookDescription     VARCHAR(500),
  bookBinding     VARCHAR(255)   NOT NULL,
  bookDate     DATE()   NOT NULL,
  bookComments     VARCHAR(255),
  bookPrice     FLOAT(5,2)   NOT NULL,
  bookSellable     BIT()   NOT NULL,
  PRIMARY KEY (bookID)
);

-- insert data into the database
INSERT INTO clinics VALUES
(1, 'The Book', 'The Author', NULL, 1354679382013, 'Mint', NULL, 'Hardcover', '1982-03-18', NULL, 20.74, 1),
(2, 'Another Book', 'Another Author', NULL, 1354847366524, 'Mint', NULL, 'Hardcover', '1983-05-08', NULL, 25.48, 1),
(3, 'Third Book', 'Third Author', 1, 1358884952433, 'Near Mint', NULL, 'Hardcover', '1984-01-11', NULL, 12.04, 0),
(4, 'Third Book', 'Third Author', 2, 1354673294573, 'Mint', NULL, 'Hardcover', '1985-09-22', NULL, 29.99, 1),
(5, 'Book Four', 'Fourth Author', NULL, 1254679386664, 'Mint', NULL, 'Hardcover', '1986-07-17', NULL, 19.99, 1),
(6, 'Whats With The Books?', 'Another Author', Null, 1399384756236, 'Mint', NULL, 'Hardcover', '1992-03-18', NULL, 30.98, 1),
(7, 'Good Books', 'Bad Author', NULL, 1354598437537, 'Mint', NULL, 'Hardcover', '1999-11-05', NULL, 20.33, 1),
(8, 'Bad Books', 'Bad Author', NULL, 1354602933756, 'Mint', NULL, 'Hardcover', '1999-11-08', NULL, 20.33, 1);

-- create the users and grant priveleges to those users
GRANT SELECT, INSERT, DELETE, UPDATE
ON BOOK.*
TO the_user@localhost
IDENTIFIED BY 'pa55word';
