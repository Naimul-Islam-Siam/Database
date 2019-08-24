select branch_name, first_name, last_name
from branch, employee
where employee.emp_id = branch.mgr_id

-- equivalent using JOIN
select branch.branch_name, employee.first_name, employee.last_name 
from branch
join employee
on branch.mgr_id = employee.emp_id;

-- =============================
-- |branch_name |    first_name |
-- =============================|
-- |corporate   |    david      |
-- |----------------------------|
-- |scranton    |    michael    |
-- |----------------------------|
-- |stamford    |    josh       |
-- =============================

-- left join & right join
select branch.branch_name, employee.first_name 
from branch
right join employee
on branch.mgr_id = employee.emp_id;

-- =============================
-- |branch_name |    first_name |
-- =============================
-- |corporate   |    david      |
-- |----------------------------|
-- |scranton    |    michael    |
-- |----------------------------|
-- |stamford    |    josh       |
-- |----------------------------|
-- |null        |    jan        |
-- |----------------------------|
-- |null        |    angela     |
-- |----------------------------|
-- |null        |    kelly      |
-- |----------------------------|
-- |null        |    stanley    |
-- |----------------------------|
-- |null        |    andy       |
-- |----------------------------|
-- |null        |    jim        |
-- =============================


select employee.first_name, branch.branch_name 
from branch
left join employee
on branch.mgr_id = employee.emp_id;

-- ==================================|
-- |    first_name |    bracnh_name  |
-- ==================================
-- |    david      |    corporate    |
-- ----------------------------------|
-- |    michael    |    scranton     |
-- ----------------------------------|
-- |    josh       |    stamford     |
-- ----------------------------------|
-- |    jan        |    null         |
-- ----------------------------------|
-- |    angela     |    null         |
-- ----------------------------------|
-- |    kelly      |    null         |
-- ----------------------------------|
-- |    stanley    |    null         |
-- ----------------------------------|
-- |    andy       |    null         |
-- ----------------------------------|
-- |    jim        |    null         |
-- ==================================