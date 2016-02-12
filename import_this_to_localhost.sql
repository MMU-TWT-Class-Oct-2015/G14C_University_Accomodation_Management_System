create database TWT07;

use TWT07;

create table course (
course_id varchar(20) not null primary key,
course_name varchar(50),
leader varchar(20),
department varchar(10));

create table student (
student_id int not null primary key,
fname varchar(20),
lname varchar(20),
address varchar(50),
dob date,
category varchar(20),
course_id varchar(20) references course);

create table staff (
staff_id int not null primary key,
staff_name varchar(20),
password varchar(10));

create table relative (
relative_name varchar(20) not null primary key,
relationship varchar(10),
address varchar(50),
tel varchar(12),
student_id int references student);

create table hall (
hall_number int not null primary key,
hall_name varchar(20),
address varchar(50),
tel varchar(12));

create table place (
place_number int not null primary key,
rent_rate double,
hall_number int references hall,
room_number int);

create table lease (
lease_number varchar(6) not null primary key,
start_date date,
end_date date,
status varchar(10),
student_id int references student,
place_number int references place,
staff_id int references staff);

insert into course values
('ITM', 'Information Technology Management', 'Mr. Afizan', 'FIST'),
('AI', 'Artificial intelligence', 'Dr. Tan', 'FIST'),
('BA', 'Business Administrative', 'Mr. Lee', 'FOB'),
('IL', 'International Law', 'Mr. Wong', 'FOL');

insert into student values
(1141327308, 'Louis', 'Lee', 'Jalan melaka', '1993-06-30', '2UG', 'ITM'),
(1141333333, 'John' , 'Tan', 'jalan dahlia', '1993-02-05', '1UG', 'AI');
 