INSERT INTO users (first_name, last_name, email, bio)
VALUES
('Alex', 'Glassford', 'abglassford@somemail.com', "I'm a person!"),
('Kelli', 'Glassford', 'kelli76257@somemail.com', "I'm a person too!"),
('Aaron', 'Glassford', 'grendade21@somemail.com', "I'm a person who is a brother!"),
('Clay', 'Glassford', 'clayg@somemail.com', "I'm a person's dad!"),
('Taeya', 'Glassford', 'tayg@somemail.com', "I'm two peoples' mom!"),
('George', 'Hutchins', 'georgie@somemeail.com', "I'm a person who is a dad!"),
('Jamie', 'Hutchins', 'jhutch@somemail.com', "I'm a person too!"),
('Matthew', 'Hutchins', 'matt@somemail.com', "I'm a person who is young");

INSERT INTO events (description, location, event_time, capacity, attending, not_attending, maybe_attending, invited)
VALUES
("We're gonna play VolleyBall!", '39.706565, -104.972222', '2016-11-10 12:00:00', 8, 2, 2, 1, 8),
("We're gonna play Soccer!", '39.706664, -104.970613', '2016-11-17 12:00:00', 8, 8, 0, 0, 8),
("We're gonna play Something Else!", '39.706565, 104.972222', '2016-11-19 12:00:00', 8, 8, 2, 2, 4),
("We're gonna have a Thanksgiving Party!", '39.706565, 104.972222', '2016-11-24 12:00:00', 8, 8, 0, 0, 8);

INSERT INTO groups (name)
VALUES
('Glassfords'),
('Hutchins'),
('Glassford-Hutchins'),
('Younguns'),
('Olduns');
