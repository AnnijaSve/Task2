create table addresses
(
	id int auto_increment
		primary key,
	cvId int null,
	country varchar(255) null,
	postIndex varchar(255) null,
	city varchar(255) null,
	street varchar(255) null,
	apartment varchar(255) null
);

