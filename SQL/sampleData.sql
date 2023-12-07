/* Script to create sample data for all the tables */

USE AEM;

/* Users table */
INSERT INTO Users
(UserID, FirstName, LastName, Email, UserPassword, PhoneNumber)
VALUES
(12345678, 'John', 'Smith', 'johnsmith@gmail.com', 'password', 1234567890);

INSERT INTO Users
(UserID, FirstName, LastName, Email, UserPassword, PhoneNumber)
VALUES
(28375027, 'James', 'Garfield', 'jgarfield12@gmail.com', '99bag', 9384028599);

/* Presenter table */
INSERT INTO Users
(PresenterID, FirstName, LastName, Email, Institution, UserID)
VALUES
(12345678, 'John', 'Smith', 'johnsmith@gmail.com', '', 1234567890);