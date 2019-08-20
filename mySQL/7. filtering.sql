-- student TABLE
-- =====================================
-- | student_id | name     | major      |
-- =====================================
-- | 1          | Jack     |  Biology   |
-- -------------------------------------
-- | 2          |  Pat     | Physics    |
-- -------------------------------------
-- | 3          | Andrew   | Chemistry  |
-- -------------------------------------
-- | 4          | Shawn    | Physics    |
-- -------------------------------------
-- | 5          | John     | Biology    |
-- =====================================

SELECT * 
FROM student
WHERE major = 'Biology';

-- 1 Jack Biology
-- 5 John Biology


SELECT name, major
FROM student
WHERE major = 'Biology' OR major = 'Chemistry';
-- alternative
WHERE major IN ('Biology', 'Chemistry');

-- Jack Biology
-- Andrew Chemistry
-- John Biology

SELECT * 
FROM student
WHERE major <> 'Biology'; -- where major is not Biology

-- 2 Pat Physics
-- 3 Andrew Chemistry
-- 4 Shawn Physics



SELECT *
FROM student
WHERE major IN ('Biology', 'Chemistry') AND student_id > 2; -- combine multiple conditions

-- 3 Andrew Chemistry
-- 5 John Biology