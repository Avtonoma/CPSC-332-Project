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

CREATE TABLE IF NOT EXISTS Reviewer
(
    ReviewerID INT(8) UNSIGNED NOT NULL,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,

    PRIMARY KEY (ReviewerID)
);

CREATE TABLE IF NOT EXISTS Abstract
(
    AbstractID INT(8) UNSIGNED NOT NULL,
    Title VARCHAR(20) NOT NULL,
    Content VARCHAR(max) NOT NULL, /* Do we need this? What is this column? */
    AbstractType VARCHAR(15) NOT NULL,
    SubjectArea VARCHAR(50) NOT NULL,
    PresenterID INT(8) UNSIGNED NOT NULL,
    EventID INT(8) UNSIGNED NOT NULL,

    FOREIGN KEY (ReviewerID) REFERENCES Reviewer(ReviewerID),

    PRIMARY KEY (AbstractID)
);

CREATE TABLE IF NOT EXISTS Sponsor
(
    SponsorID INT(8) UNSIGNED NOT NULL,
    SponsorName VARCHAR(50) NOT NULL,
    
    FOREIGN KEY (UserID) REFERENCES User(UserID),

    PRIMARY KEY (SponsorID)
);

CREATE TABLE IF NOT EXISTS Venue
(
    VenueID INT(8) UNSIGNED NOT NULL,
    VenueName VARCHAR(50) NOT NULL,
    StreetAddress VARCHAR(100) NOT NULL,
    City VARCHAR(25) NOT NULL,
    VenueState VARCHAR(2) NOT NULL,
    Zip INT(5) NOT NULL,

    PRIMARY KEY (VenueID)
);

CREATE TABLE IF NOT EXISTS AEMEvent
(
    EventName VARCHAR(50) NOT NULL,
    EventDescription VARCHAR(50) NOT NULL,
    StartDate DATE NOT NULL,
    EndDate DATE NOT NULL,
    Capacity INT(3) UNSIGNED NOT NULL,
    AbstractDeadline DATE NOT NULL,
    PresenterList VARCHAR(max) NOT NULL,
    FacultyList VARCHAR(max) NOT NULL,
    SponsorList VARCHAR(max) NOT NULL,
    Venue VARCHAR(max) NOT NULL,

    FOREIGN KEY (AbstractID) REFERENCES Abstract(AbstractID),
    FOREIGN KEY (SponsorID) RERFERENCES Sponsor(SponsorID),
    FOREIGN KEY (VenueID) REFERENCES Venue(VenueID),

    PRIMARY KEY (EventName)
);

CREATE TABLE IF NOT EXISTS Attenddee
(
    FOREIGN KEY (UserID) References User(UserID),
    FOREIGN KEY (EventName) References AEMEvent(EventID)
);

