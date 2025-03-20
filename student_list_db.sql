CREATE DATABASE student;

CREATE TABLE stdnt(
id INT (255) AUTO_INCREMENT PRIMARY KEY,
NAME VARCHAR (255),
age INT (255),
school VARCHAR (255),
grade INT (255),
section VARCHAR (255)
);

SELECT * FROM stdnt;

INSERT INTO  stdnt (id, NAME, age, school, grade, section)
VALUES
(1, "Samuel", 21, "bcp", 12, "ICT-P");

DROP DATABASE student;
DROP TABLE stdnt;