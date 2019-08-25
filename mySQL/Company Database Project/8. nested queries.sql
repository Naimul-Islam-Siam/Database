-- find name of all employees 
-- who have sold over 30000 to a client

select employee.first_name, employee.last_name
from employee
where employee.emp_id in (
    select works_with.emp_id
    from works_with
    where works_with.total_sales > 30000
);



-- find all clients who are handled by the branch
-- that Michael Scott managed
-- assume that you know his manager id

select client.client_name
from client
where client.branch_id in (
    select branch.branch_id
    from branch
    where branch.mgr_id = 102
);

-- if his manager id is unknown
select client.client_name
from client
where client.branch_id in (
    select branch.branch_id
    from branch
    where branch.mgr_id in (
        select employee.emp_id
        from employee
        where employee.first_name = 'Michael' and employee.last_name = 'Scott'
    )
);