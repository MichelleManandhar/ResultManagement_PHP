create database result;
use result;
create table userid(
	username varchar(20),
	password varchar(20)
);
insert into userid values("michelle","1234");
insert into userid values ("shreediz","12345");
select * from userid;

create table bimfirst(
	roll int(8) primary key,
	name varchar(20),
	cis int(3),
	basicmath int(3),
	dl int(3),
	eng int(3),
	pom int(3)
);
select * from bimfirst;
	
create table bimsecond(
	roll2 int(8) primary key,
	name2 varchar(20),
	one2 int(3),
	two2 int(3),
	three2 int(3),
	four2 int(3),
	five2 int(3)
);
drop table bimsecond;
select * from bimsecond;

create table bimthird(
	roll3 int(8) primary key,
	name3 varchar(20),
	one3 int(3),
	two3 int(3),
	three3 int(3),
	four3 int(3),
	five3 int(3)
);
select * from bimthird;

create table bimfourth(
	roll4 int(8) primary key,
	name4 varchar(20),
	one4 int(3),
	two4 int(3),
	three4 int(3),
	four4 int(3),
	five4 int(3)
);
select * from bimfourth;

create table bimfifth(
	roll5 int(8) primary key,
	name5 varchar(20),
	one5 int(3),
	two5 int(3),
	three5 int(3),
	four5 int(3),
	five5 int(3)
);
select * from bimfifth;

create table bimsixth(
	roll6 int(8) primary key,
	name6 varchar(20),
	one6 int(3),
	two6 int(3),
	three6 int(3),
	four6 int(3),
	five6 int(3)
);
select * from bimsixth;

create table bimseventh(
	roll7 int(8) primary key,
	name7 varchar(20),
	one7 int(3),
	two7 int(3),
	three7 int(3),
	four7 int(3),
	five7 int(3),
	six7 int(4)
);
select * from bimseventh;

create table bimeighth(
	roll8 int(8) primary key,
	name8 varchar(20),
	one8 int(3),
	two8 int(3),
	three8 int(3),
	four8 int(3)
);
select * from bimeighth;



	
	
