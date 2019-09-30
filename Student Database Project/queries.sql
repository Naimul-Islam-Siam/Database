create table department (
    department_id varchar(2) primary key,
    department_name varchar(40)
);

create table student (
    student_id int primary key,
    student_name varchar(60),
    department_id varchar(2),
    series int
    foreign key (department_id) references department(department_id) on delete set null
);

insert into department values ('00', 'Civil Engineering');
insert into department values ('01', 'Mechanical Engineering');
insert into department values ('02', 'Electrical & Electronic Engineering');
insert into department values ('03', 'Computer Science & Engineering');

insert into student values (1603001, 'Shegufa Rob', '03', 16);
insert into student values (1603002, 'Nasif Raihan', '03', 16);
insert into student values (1603003, 'Hasibur Rahman', '03', 16);
insert into student values (1603004, 'Muntashir Al Islam', '03', 16);
insert into student values (1603005, 'Shamiul Islam', '03', 16);



select department_name
from student, department
where department.department_id = student.department_id 
    and student_name = 'Nasif Raihan';

select distinct student_name,department_name
from student, department
where department.department_id = student.department_id
	and department_name = 'Civil Engineering';