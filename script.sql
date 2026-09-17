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

# PROCEDURE

DELIMITER //

CREATE PROCEDURE getAllNotes()
BEGIN
    SELECT ID,Title,Content,date_created 
    FROM notes;
END //

CREATE PROCEDURE getNote(IN p_id INT)
BEGIN
    SELECT ID,Title,Content 
    FROM notes 
    WHERE ID = p_id;
END //

CREATE PROCEDURE addNote(IN p_title VARCHAR(100), IN p_content TEXT)
BEGIN
    INSERT INTO notes (Title,Content) 
    VALUES (p_title,p_content);
END // 

CREATE PROCEDURE deleteNote(IN p_id INT)
BEGIN
    DELETE FROM notes 
    WHERE ID = p_id;
END //

CREATE PROCEDURE updateNote(IN p_title VARCHAR(100), IN p_content TEXT,IN p_id INT)
BEGIN
    UPDATE notes 
    SET Title = p_title, Content = p_content
    WHERE ID = p_id; 
END //

DELIMITER ;