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

insert into student values (1600001, 'Mrinmoy Mondal', '00', 16);
insert into student values (1600002, 'Riad Morshed', '00', 16);
insert into student values (1600003, 'Jarir Ahmed', '00', 16);
insert into student values (1600004, 'Md Nahid Sadik', '00', 16);
insert into student values (1600005, 'Syed Siddique', '00', 16);

insert into student values (1601001, 'Nur Afroz', '01', 16);
insert into student values (1601002, 'Azmal Awasaf', '01', 16);
insert into student values (1601003, 'Md Sharifuzzaman', '01', 16);
insert into student values (1601004, 'KM Shohanur Rahman', '01', 16);
insert into student values (1601005, 'Fuad Al Abir', '01', 16);

insert into student values (1500001, 'Utshab Kumar Ghosh', '00', 15);
insert into student values (1500002, 'Sabrin Alam', '00', 15);
insert into student values (1500003, 'Sumiya Asha', '00', 15);
insert into student values (1500004, 'Md Mahbubur Rahman', '00', 15);
insert into student values (1500005, 'Nur-e-Jannat', '00', 15);

insert into student values (1501001, 'Mehrab Hossain', '01', 15);
insert into student values (1501002, 'Soykot Hossain', '01', 15);
insert into student values (1501003, 'Ahmed Al Beruny', '01', 15);
insert into student values (1501004, 'Jannatul Jahan', '01', 15);
insert into student values (1501005, 'Hasibul Hasan', '01', 15);

insert into student values (1502001, 'Mizanur Rahman', '02', 15);
insert into student values (1502002, 'Ishrat Jahan', '02', 15);
insert into student values (1502003, 'Torikul Islam', '02', 15);
insert into student values (1502004, 'Hasanul Banna', '02', 15);
insert into student values (1502005, 'Debasish Sarker', '02', 15);

insert into student values (1503001, 'Farhana Haque', '03', 15);
insert into student values (1503002, 'Noor Fazle Rabbi', '03', 15);
insert into student values (1503003, 'Md Sozib Hossain', '03', 15);
insert into student values (1503004, 'Maisha Umama', '03', 15);
insert into student values (1503005, 'Naimul Islam Siam', '03', 15);

insert into student values (1504001, 'Rejanul Karim', '04', 15);
insert into student values (1504002, 'Moben Rahoman', '04', 15);
insert into student values (1504003, 'Zarin Rafa', '04', 15);
insert into student values (1504004, 'Nahian Rifaat', '04', 15);
insert into student values (1504005, 'Shadib Mahmud', '04', 15);


select department_name
from student, department
where department.department_id = student.department_id 
    and student_name = 'Nasif Raihan';

select distinct student_name,department_name
from student, department
where department.department_id = student.department_id
	and department_name = 'Civil Engineering';