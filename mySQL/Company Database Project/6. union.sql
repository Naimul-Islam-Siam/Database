-- rules of using UNION
-- 1. have to have same number of columns in every select statements
--      select first_name, last_name from employee
--      union select branch_name from branch        [not applicable]

-- 2. selected columns have to have same data-type



-- find a list of employees and branch names
select first_name
from employee
union
select branch_name
from branch


-- find a list of all clients' & suppliers' name 
select client_name 
from client
union
select suppliers_name
from branch_supplier;