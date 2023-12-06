/* Creates empty tables used in the "AEM" database */

DROP DATABASE IF EXISTS AEM;
CREATE SCHEMA AEM;
USE AEM;

CREATE TABLE IF NOT EXISTS User
(
    UserID INT(8) UNSIGNED NOT NULL,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    UserPassword VARCHAR(255) NOT NULL,
    PhoneNumber INT(10) NOT NULL,

    PRIMARY KEY (UserID)
);

CREATE TABLE IF NOT EXISTS AEMEvent
(
    EventName VARCHAR(20) NOT NULL,
    EventDescription VARCHAR(50) NOT NULL,
    StartDate DATE NOT NULL,
    EndDate DATE NOT NULL,
    Capacity INT(3) NOT NULL,
    AbstractDeadline DATE NOT NULL,
    PresenterList VARCHAR(max) NOT NULL,
    FacultyList VARCHAR(max) NOT NULL,
    SponsorList VARCHAR(max) NOT NULL,
);

CREATE TABLE IF NOT EXISTS Attenddee
(
    FOREIGN KEY (UserID) References User(UserID),
    FOREIGN KEY (EventName) References AEMEvent(EventID)
);

