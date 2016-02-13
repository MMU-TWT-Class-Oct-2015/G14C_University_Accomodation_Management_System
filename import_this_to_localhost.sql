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

insert into student (student_id, fname, lname, address, dob, category, course_id) values
('1141327308', 'Louis', 'Lee', 'Jalan melaka', '1993-06-30', '2UG', 'ITM'),
('1141333333', 'John' , 'Tan', 'jalan dahlia', '1993-02-05', '1UG', 'AI');

insert into hall (hall_number, hall_name, address, tel) values
('101', 'Gamma', 'Lot A, Melaka University, Bkt Beruang, 75450 Ayer Keroh, Melaka', '04-4234231'),
('102', 'Gamma', 'Lot A, Melaka University, Bkt Beruang, 75450 Ayer Keroh, Melaka', '04-4234231'),
('103', 'Gamma', 'Lot A, Melaka University, Bkt Beruang, 75450 Ayer Keroh, Melaka', '04-4234231'),
('201', 'Beta', 'Lot B, Melaka University, Bkt Beruang, 75450 Ayer Keroh, Melaka', '04-4238888'),
('202', 'Beta', 'Lot B, Melaka University, Bkt Beruang, 75450 Ayer Keroh, Melaka', '04-4238888'),
('203', 'Beta', 'Lot B, Melaka University, Bkt Beruang, 75450 Ayer Keroh, Melaka', '04-4238888'),
('301', 'Omega', 'Lot c, Melaka University, Bkt Beruang, 75450 Ayer Keroh, Melaka', '04-4239999'),
('302', 'Omega', 'Lot c, Melaka University, Bkt Beruang, 75450 Ayer Keroh, Melaka', '04-4239999'),
('303', 'Omega', 'Lot c, Melaka University, Bkt Beruang, 75450 Ayer Keroh, Melaka', '04-4239999');

insert into place (place_number, rent_rate, hall_number, room_number) values
('10101', '50', '101', '01'),
('10102', '50', '101', '02'),
('10103', '50', '101', '03'),
('10201', '50', '102', '01'),
('10202', '50', '102', '02'),
('10203', '50', '102', '03'),
('10301', '50', '103', '01'),
('10302', '50', '103', '02'),
('10303', '50', '103', '03'),
('20101', '65', '201', '01'),
('20102', '65', '201', '02'),
('20103', '65', '201', '03'),
('20201', '65', '202', '01'),
('20202', '65', '202', '02'),
('20203', '65', '202', '03'),
('20301', '65', '203', '01'),
('20302', '65', '203', '02'),
('20303', '65', '203', '03'),
('30101', '75', '301', '01'),
('30102', '75', '301', '02'),
('30103', '75', '301', '03'),
('30201', '75', '302', '01'),
('30202', '75', '302', '02'),
('30203', '75', '302', '03'),
('30301', '75', '303', '01'),
('30302', '75', '303', '02'),
('30303', '75', '303', '03');

insert into course values
('ITM', 'Information Technology Management', 'Mr. Afizan', 'FIST'),
('AI', 'Artificial intelligence', 'Dr. Tan', 'FIST'),
('ST', 'Security Technology', 'Ms. Ooi Shih Yin', 'FIST'),
('BI', 'Bioinformatics', 'Dr. Ng Chong Han', 'FIST'),
('FIT', 'Foundation in Information Technology', 'Mr. Afizan', 'FIST'),
('BA', 'Business Administrative', 'Mr. Lee', 'FOB'),
('FIB', 'Foundation in Business', 'Ms. Siti Hasmah', 'FOB'),