SELECT * 
FROM student; -- display everything of the table named 'student'

--For Example

-- =====================================
-- | student_id | name     | major      |
-- =====================================
-- | 1          | Jack     | Biology    |
-- -------------------------------------
-- | 2          | Pat      | Physics    |
-- -------------------------------------
-- | 3          | Andrew   | Chemistry  |
-- -------------------------------------
-- | 4          | Shawn    | Physics    |
-- -------------------------------------
-- | 5          | John     | Biology    |
-- =====================================


SELECT student_id, major
FROM student
ORDER BY student_id -- will be sorted in ascending order by default [1-> 2-> 3-> 4]

ORDER BY student_id DESC -- sort in descending order [4-> 3-> 2-> 1]

ORDER BY name -- even though we didn't select 'name', we still can order by 'name'




ORDER BY major, student_id -- first order by major then within that list order by student id
-- 1 biology
-- 5 biology
-- 3 chemistry
-- 2 physics
-- 4 physics

ORDER BY major, student_id DESC
-- 5 biology
-- 1 biology
-- 3 chemistry
-- 4 physics
-- 2 physics


SELECT *
FROM student
LIMIT 2 -- only 2 rows will be visible

-- 1 Jack Biology
-- 2 Pat Physics

SELECT * 
FROM student
ORDER BY student_id DESC
LIMIT 2

-- 5 John Biology
-- 4 Shawn Physics