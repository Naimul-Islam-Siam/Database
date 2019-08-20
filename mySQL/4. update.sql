UPDATE student
SET major = 'Bio'
WHERE major = 'Biology' -- if (major = 'Biology') major = 'Bio';

SET major = 'CS'
WHERE major = 'Computer Science'

SET major = 'Bio-chemistry'
WHERE major = 'Bio' OR major = 'Chemistry'

SET name = 'Tom', major = 'undecided'
WHERE student_id = 1

-- "=" equal 
-- "<>" not equal
-- ">" greater than
-- "<" less than
-- ">=" greater than or equal
-- "<=" less than or equal