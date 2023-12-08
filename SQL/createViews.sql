USE AEM;

/* Users who create more than 10 events */
DROP VIEW IF EXISTS UsersGT10Events;
CREATE VIEW UsersGT10Events AS
SELECT U.FirstName, U.LastName, U.Email, U.PhoneNumber
FROM Users U
JOIN Organizer O ON U.UserID = O.UserID
JOIN AEMEvent E ON O.OrganizerID = E.OrganizerID
GROUP BY U.UserID
HAVING COUNT(E.EventName) > 10;

/* Events that have more than 100 abstracts */
DROP VIEW IF EXISTS EventsGT100Abstracts;
CREATE VIEW EventsGT100Abstracts AS
SELECT E.EventName, COUNT(A.AbstractID) AS AbstractCount
FROM AEMEvent E
LEFT JOIN Abstract A ON E.EventName = A.EventID
GROUP BY E.EventName
HAVING AbstractCount > 100;

/* Abstracts that have more than 20 presenters */
DROP VIEW IF EXISTS AbstractsGT20Presenters;
CREATE VIEW AbstractGT20Presenters AS
SELECT A.AbstractID, A.Title, COUNT(P.PresenterID) AS PresenterCount
FROM Abstract A
JOIN Presents P ON A.AbstractID = P.AbstractID
GROUP BY A.AbstractID
HAVING PresenterCount > 20;

/* Abstracts that are closed or withdrawn */
DROP VIEW IF EXISTS ClosedOrWithdrawnAbstracts;
CREATE VIEW ClosedOrWithdrawnAbstracts AS
SELECT *
FROM Abstract
WHERE AbstractClosed = 1; -- 1 represents a closed or withdrawn abstract
