-- Add a new column to table
ALTER TABLE student ADD gpa DECIMAL(3, 2);

-- Remove a column from the table
ALTER TABLE student DROP COLUMN gpa;

-- Remove an Entire Table
DROP TABLE student