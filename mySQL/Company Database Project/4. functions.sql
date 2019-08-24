-- count the number of employees
select count(emp_id)
from employee;


-- count the number of female employees who born after 1970
select count(emp_id)
from employee
where sex = 'F' and birth_date > '1971-1-1';


-- find the average salary of male employees
select avg(salary)
from employee
where sex = 'M';


-- find the sum of salaries
select sum(salary)
from employee;


-- aggregation
-- find the total sale of each salesman
select sum(total_sales), emp_id
from works_with
group by emp_id;