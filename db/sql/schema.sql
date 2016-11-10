DROP DATABASE IF EXISTS unityAccelerator;

CREATE DATABASE unityAccelerator;

USE unityAccelerator;

CREATE TABLE users (
  id serial,
  first_name varchar(255),
  last_name varchar(255),
  bio text,
  email varchar(255)
);

CREATE TABLE events (
  id serial,
  description text,
  location text,
  event_time datetime,
  capacity int,
  attending int,
  not_attending int,
  maybe_attending int,
  invited int
);

CREATE TABLE groups (
  id serial,
  name varchar(255)
);

CREATE TABLE users_events (
  user_id int,
  event_id int
);

CREATE TABLE events_groups (
  event_id int,
  group_id int
);

CREATE TABLE groups_users (
  user_id int,
  group_id int
);
