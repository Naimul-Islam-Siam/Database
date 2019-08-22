-- Find all employees ordered by salary
select *
from employee
order by salary;



-- Find all employees ordered by sex then name
select *
from employee
order by sex, first_name, last_name;



-- Find the forenames and surnames of all the employee
select first_name as forename, last_name as surname
from employee;
                                    
-- because of "as"                  -- with out "as"
-- |======================|         -- |======================|             
-- | forename  |  surname |         -- | firstname | lastname |
-- |======================|         -- |======================|
-- | David     | Wallace  |         -- | David     | Wallace  |
-- |----------------------|         -- |----------------------|
-- | Jan       | Levinson |         -- | Jan       | Levinson |
-- |----------------------|         -- |----------------------|
-- | Michael   | Scott    |         -- | Michael   | Scott    |
-- |----------------------|         -- |----------------------|
-- | .......   | ........ |         -- | .......   | ........ |
-- |===========|==========|         -- |===========|==========|            



-- Find all the different supply types
select distinct supply_type
from branch_supplier;

-- |=================|
-- |supply_type      |
-- |=================|
-- |Paper            |
-- |-----------------|
-- |Custom Forms     |
-- |-----------------|
-- |Writing Utensils |
-- |=================|