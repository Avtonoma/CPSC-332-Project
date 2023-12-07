/* Creates empty tables used in the "AEM" database */

DROP DATABASE IF EXISTS AEM;
CREATE SCHEMA AEM;
USE AEM;

CREATE TABLE IF NOT EXISTS Users
(
    UserID INT(8) UNSIGNED NOT NULL,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    UserPassword VARCHAR(255) NOT NULL,
    PhoneNumber INT(10) NOT NULL,

    PRIMARY KEY (UserID)
);

CREATE TABLE IF NOT EXISTS Presenter
(
    PresenterID INT(8) UNSIGNED NOT NULL,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Institution VARCHAR(50) NOT NULL,
    UserID INT(8) UNSIGNED NOT NULL,

    FOREIGN KEY (UserID) REFERENCES Users(UserID),

    PRIMARY KEY (PresenterID)
);

CREATE TABLE IF NOT EXISTS KeynoteSpeaker
(
    PresenterID INT(8) UNSIGNED NOT NULL,

    FOREIGN KEY (PresenterID) REFERENCES Presenter(PresenterID),

    KeynoteSpeakerID INT(8) UNSIGNED NOT NULL,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,

    PRIMARY KEY (PresenterID)
);

CREATE TABLE IF NOT EXISTS Organizer
(
    OrganizerID INT(8) UNSIGNED NOT NULL,
    UserID INT(8) UNSIGNED NOT NULL,

    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    
    PRIMARY KEY (OrganizerID)
);

CREATE TABLE IF NOT EXISTS FacultyMentor
(
    MentorID INT(8) UNSIGNED NOT NULL,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Institution VARCHAR(50) NOT NULL,
    UserID INT(8) UNSIGNED NOT NULL,

    FOREIGN KEY (UserID) REFERENCES Users(UserID),

    PRIMARY KEY (MentorID)
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
    AbstractID VARCHAR(255) NOT NULL,
    Title VARCHAR(20) NOT NULL,
    Content VARCHAR(255) NOT NULL, /* Do we need this? What is this column? */
    AbstractType VARCHAR(15) NOT NULL,
    SubjectArea VARCHAR(50) NOT NULL,
    PresenterID INT(8) UNSIGNED NOT NULL,
    EventID INT(8) UNSIGNED NOT NULL,
    ReviewerID INT(8) UNSIGNED NOT NULL,

    FOREIGN KEY (ReviewerID) REFERENCES Reviewer(ReviewerID),

    PRIMARY KEY (AbstractID)
);

CREATE TABLE IF NOT EXISTS Presents
(
    PresenterID INT(8) UNSIGNED NOT NULL,
    AbstractID VARCHAR(255) NOT NULL,
    
    FOREIGN KEY (PresenterID) REFERENCES Presenter(PresenterID),
    FOREIGN KEY (AbstractID) REFERENCES Abstract(AbstractID)
);

CREATE TABLE IF NOT EXISTS Sponsor
(
    SponsorID INT(8) UNSIGNED NOT NULL,
    SponsorName VARCHAR(50) NOT NULL,
    UserID INT(8) UNSIGNED NOT NULL,
    
    FOREIGN KEY (UserID) REFERENCES Users(UserID),

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
    PresenterList VARCHAR(255),
    FacultyList VARCHAR(255),
    SponsorList VARCHAR(255),
    Venue VARCHAR(255) NOT NULL,
    PublicEvent BOOLEAN NOT NULL,
    AbstractID VARCHAR(255) NOT NULL,
    OrganizerID INT(8) UNSIGNED NOT NULL,

    FOREIGN KEY (AbstractID) REFERENCES Abstract(AbstractID),
    FOREIGN KEY (OrganizerID) REFERENCES Organizer(OrganizerID),

    PRIMARY KEY (EventName)
);


CREATE TABLE IF NOT EXISTS University
(
    UniversityName VARCHAR(50) NOT NULL,
    UniversityID INT(8) UNSIGNED NOT NULL,
    PresenterID INT(8) UNSIGNED NOT NULL,
    MentorID INT(8) UNSIGNED NOT NULL,
    EventName VARCHAR(50) NOT NULL,
    
    FOREIGN KEY (PresenterID) REFERENCES Presenter(PresenterID),
    FOREIGN KEY (MentorID) REFERENCES FacultyMentor(MentorID),
    FOREIGN KEY (EventName) REFERENCES AEMEvent(EventName)
);

CREATE TABLE IF NOT EXISTS Attenddee
(
    UserID INT(8) UNSIGNED NOT NULL,
    EventName VARCHAR(50) NOT NULL,

    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (EventName) REFERENCES AEMEvent(EventName)
);

