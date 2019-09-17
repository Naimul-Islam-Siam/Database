-- given in schema
create table Customer (
    cust_id int primary key,
    cust_name varchar(40)
);

create table Item (
    item_id int primary key,
    item_name varchar(40),
    price int 
);

create table Sale (
    bill_no int primary key,
    bill_date date,
    qty_sold int
);


-- created to form relation between the given tables
create table Details (
    cust_id int,
    item_id int,
    bill_no int,
    foreign key (cust_id) references Customer (cust_id) on delete cascade,
    foreign key (item_id) references Item (item_id) on delete cascade,
    foreign key (bill_no) references Sale (bill_no) on delete cascade
);