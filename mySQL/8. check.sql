create table persons (
    ID int primary key,
    first_name varchar(40),
    last_name varchar(40),
    age int,
    check (age >= 18)
);

-- using CONSTRAINT for multiple condition and future use
create table persons (
    ID int primary key,
    first_name varchar(40),
    last_name varchar(40),
    age int,
    city varchar(40)
    constraint check_person check (
        age >= 18 and city = 'California'
    )
);

-- for ALTER TABLE
alter table persons
add check(age >= 18);

alter table persons
add constraint check_person check(
    age >= 18 and city = 'California'
)


-- drop a CHECK
alter table persons
drop check check_person;