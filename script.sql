# run per script

# create and use database
CREATE DATABASE note_db;
USE note_db;

# create table
CREATE TABLE notes(
ID INT PRIMARY KEY AUTO_INCREMENT,
Title VARCHAR(100),
Content TEXT,
date_created DATETIME DEFAULT CURRENT_TIMESTAMP
);