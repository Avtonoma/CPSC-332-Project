USE AEM;

/* Users table */
INSERT INTO Users (UserID, FirstName, LastName, Email, UserPassword, PhoneNumber)
VALUES
(12345678, 'John', 'Smith', 'johnsmith@gmail.com', 'password', 123456789),
(28375027, 'Tim', 'Apple', 'theappleman@gmail.com', '99bag', 938402859),
(37482910, 'Emily', 'Johnson', 'emilyj@hotmail.com', 'emj2023', 567890123),
(45872635, 'Carlos', 'Garcia', 'carlosg@gmail.com', 'cgarcia', 234567890),
(11112222, 'Alice', 'Brown', 'alicebrown@yahoo.com', 'alice2023', 1122334455),
(33334444, 'Ravi', 'Kumar', 'ravikumar@beans.llc', 'ravi1234', 5566778899),
(55556666, 'Sophia', 'Martinez', 'sophiam@outlook.com', 'sophia789', 9988776655);

/* Presenter table */
INSERT INTO Presenter (PresenterID, FirstName, LastName, Email, Institution, UserID)
VALUES
(87654321, 'John', 'Smith', 'johnsmith@gmail.com', 'CalState Fullerton', 12345678),
(65432187, 'Emily', 'Johnson', 'emilyj@hotmail.com', 'University of California', 37482910),
(78901234, 'Carlos', 'Garcia', 'carlosg@gmail.com', 'Texas State University', 45872635),
(22223333, 'Alice', 'Brown', 'alicebrown@yahoo.com', 'MIT', 11112222),
(44445555, 'Ravi', 'Kumar', 'ravikumar@beans.llc', 'Stanford University', 33334444),
(66667777, 'Sophia', 'Martinez', 'sophiam@outlook.com', 'Harvard University', 55556666);

/* KeynoteSpeaker table */
INSERT INTO KeynoteSpeaker (PresenterID, KeynoteSpeakerID, FirstName, LastName, Email)
VALUES
(87654321, 12345678, 'John', 'Smith', 'johnsmith@gmail.com'),
(65432187, 37482910, 'Emily', 'Johnson', 'emilyj@hotmail.com'),
(78901234, 45872635, 'Carlos', 'Garcia', 'carlosg@gmail.com'),
(22223333, 11112222, 'Alice', 'Brown', 'alicebrown@yahoo.com'),
(44445555, 33334444, 'Ravi', 'Kumar', 'ravikumar@beans.llc'),
(66667777, 55556666, 'Sophia', 'Martinez', 'sophiam@outlook.com');

/* Organizer table */
INSERT INTO Organizer (OrganizerID, UserID)
VALUES
(43215678, 12345678);

/* FacultyMentor table */
INSERT INTO FacultyMentor (MentorID, FirstName, LastName, Email, Institution, UserID)
VALUES
(12348765, 'John', 'Smith', 'johnsmith@gmail.com', 'CalState Fullerton', 12345678),
(56372819, 'Emily', 'Johnson', 'emilyj@hotmail.com', 'University of California', 37482910),
(91234567, 'Carlos', 'Garcia', 'carlosg@gmail.com', 'Texas State University', 45872635),
(22334455, 'Alice', 'Brown', 'alicebrown@yahoo.com', 'MIT', 11112222),
(55667788, 'Ravi', 'Kumar', 'ravikumar@beans.llc', 'Stanford University', 33334444),
(77889900, 'Sophia', 'Martinez', 'sophiam@outlook.com', 'Harvard University', 55556666);

/* Reviewer table */
INSERT INTO Reviewer (ReviewerID, FirstName, LastName, Email)
VALUES
(93263216, 'Armin', 'Thrumbo', 'thrumboman@gmail.com'),
(84736251, 'Sarah', 'Lee', 'sarahlee@outlook.com'),
(76253481, 'Raj', 'Patel', 'rajpatel@msn.com');

/* Abstract table */
INSERT INTO Abstract (AbstractID, AbstractClosed, Title, Content, AbstractType, SubjectArea, PresenterID, EventID, ReviewerID)
VALUES
(48653897, TRUE, 'Roundabout', 'This is some content', 'Oral Talk', 'International Studies and Languages', 87654321, 93849097, 93263216),
(56987412, FALSE, 'Future of Technology', 'Exploring upcoming tech trends', 'Talk in the Metaverse', 'Technology', 65432187, 84736201, 84736251),
(65748392, TRUE, 'Sustainable Energy', 'Discussion on renewable energy sources', 'Workshop', 'Environmental Science', 78901234, 84736201, 76253481);

/* Presents table */
INSERT INTO Presents (PresenterID, AbstractID)
VALUES
(87654321, 48653897),
(65432187, 56987412),
(78901234, 65748392);

/* Sponsor table */
INSERT INTO Sponsor (SponsorID, SponsorName, UserID)
VALUES
(29305385, 'Tim Apple', 28375027),
(48572036, 'Emily Johnson', 37482910);

/* Venue table */
INSERT INTO Venue (VenueID, VenueName, StreetAddress, City, VenueState, Zip)
VALUES
(48295748, 'Apple Land', '1925 Apple Lane', 'Los Angeles', 'California', 90001),
(84736201, 'Tech Expo Center', '456 Innovation Drive', 'San Francisco', 'California', 94107);

/* AEMEvent table */
INSERT INTO AEMEvent (EventName, EventDescription, StartDate, EndDate, Capacity, AbstractDeadline, PresenterList, FacultyList, SponsorList, Venue, PublicEvent, OrganizerID)
VALUES
('Apple Time', 'Time for apples', NOW(), NOW(), 300, NOW(), 'John Smith, Tim Apple', 'John Smith', 'Tim Apple', 'Apple Land', TRUE, 43215678),
('Tech Symposium', 'A conference on emerging technology trends', NOW(), NOW(), 500, NOW(), 'Emily Johnson, Carlos Garcia', 'Emily Johnson, Carlos Garcia', 'Emily Johnson', 'Tech Expo Center', TRUE, 43215678);

/* University table */
INSERT INTO University (UniversityName, UniversityID, PresenterID, MentorID, EventName)
VALUES
('CalState Fullerton', 99999999, 87654321, 12348765, 'Apple Time'),
('University of California', 88888888, 65432187, 56372819, 'Tech Symposium'),
('Texas State University', 77777777, 78901234, 91234567, 'Tech Symposium'),
('MIT', 66666666, 22223333, 22334455, 'Tech Symposium'),
('Stanford University', 55555555, 44445555, 55667788, 'Tech Symposium'),
('Harvard University', 44444444, 66667777, 77889900, 'Tech Symposium');

/* Attendee table */
INSERT INTO Attendee (UserID, EventName)
VALUES
(12345678, 'Apple Time'),
(37482910, 'Tech Symposium'),
(45872635, 'Tech Symposium'),
(11112222, 'Tech Symposium'),
(33334444, 'Tech Symposium'),
(55556666, 'Tech Symposium');
