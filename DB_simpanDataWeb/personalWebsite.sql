create database simpanDataWeb;
use simpanDataWeb;
create table messages(
	name varchar(20),
	email varchar(40),
    subject varchar(100),
    message varchar(200)
);
select * from messages;