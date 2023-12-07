/* Script to create sample data for all the tables */

USE AEM;

/* Users table */
INSERT INTO Users
(UserID, FirstName, LastName, Email, UserPassword, PhoneNumber)
VALUES
(12345678, 'John', 'Smith', 'johnsmith@gmail.com', 'password', 123456789);

INSERT INTO Users
(UserID, FirstName, LastName, Email, UserPassword, PhoneNumber)
VALUES
(28375027, 'Tim', 'Apple', 'theappleman@gmail.com', '99bag', 938402859);

/* Presenter table */
INSERT INTO Presenter
(PresenterID, FirstName, LastName, Email, Institution, UserID)
VALUES
(87654321, 'John', 'Smith', 'johnsmith@gmail.com', 'CalState Fullerton', 12345678);

/* KeynoteSpeaker table */
INSERT INTO KeynoteSpeaker
(PresenterID, KeynoteSpeakerID, FirstName, LastName, Email)
VALUES
(87654321, 12345678, 'John', 'Smith', 'johnsmith@gmail.com');

/* Organizer table */
INSERT INTO Organizer
(OrganizerID, UserID)
VALUES
(43215678, 12345678);

/* FacultyMentor table */
INSERT INTO FacultyMentor
(MentorID, FirstName, LastName, Email, Institution, UserID)
VALUES
(12348765, 'John', 'Smith', 'johnsmith@gmail.com', 'CalState Fullerton', 12345678);

/* Reviewer table */
INSERT INTO Reviewer
(ReviewerID, FirstName, LastName, Email)
VALUES
(93263216, 'Armin', 'Thrumbo', 'thrumboman@gmail.com');

/* Abstract table */
INSERT INTO Abstract
(AbstractID, Title, Content, AbstractType, SubjectArea, PresenterID, EventID, ReviewerID)
VALUES
(48653897, 'Roundabout', 'This is some content', 'Oral Talk', 'International Studies and Languages', 87654321, 93849097, 93263216);

/* Presents table */
INSERT INTO Presents
(PresenterID, AbstractID)
VALUES
(87654321, 48653897);

/* Sponsor table */
INSERT INTO Sponsor
(SponsorID, SponsorName, UserID)
VALUES
(29305385, 'Tim Apple', 28375027);

/* Venue table */
INSERT INTO Venue
(VenueID, VenueName, StreetAddress, City, VenueState, Zip)
VALUES
(48295748, 'Apple Land', '1925 Apple Lane', 'Los Angeles', 'California', 90001);

/* AEMEvent table */
INSERT INTO AEMEvent
(EventName, EventDescription, StartDate, EndDate, Capacity, AbstractDeadline, PresenterList, FacultyList, SponsorList, Venue, PublicEvent, OrganizerID)
VALUES
('Apple Time', 'Time for apples', NOW(), NOW(), 300, NOW(), 'John Smith, Tim Apple', 'John Smith', 'Tim Apple', 'Apple Land', TRUE, 43215678);

/* University table */
INSERT INTO University
(UniversityName, UniversityID, PresenterID, MentorID, EventName)
VALUES
('CalState Fullerton', 99999999, 87654321, 12348765, 'Apple Time');

/* Attendee table */
INSERT INTO Attendee
(UserID, EventName)
VALUES
(12345678, 'Apple Time');