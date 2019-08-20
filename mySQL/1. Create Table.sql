CREATE TABLE student(
    student_id INT PRIMARY KEY, -- AUTO_INCREMENT can be used 
    name VARCHAR(30) NOT NULL, -- can not be empty
    major VARCHAR(20) DEFAULT 'undecided' -- if kept empty 'undecided' by default
);