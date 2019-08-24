
-- % = any number of characters
-- _ = one single character

-- find any clients who are an LLC
select *
from client
where client_name like '%LLC'; --ends with 'LLC'


-- find any branch suppliers who are in the label business
select *
from branch_supplier
where supplier_name like '%label%'; -- has the word 'label' in it


-- find any employee born in February
select *
from employee
where birth_date like '%-02-%';
--alternative
where birth_date like '____-02%';