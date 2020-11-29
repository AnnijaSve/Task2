create table educations
(
	id int auto_increment
		primary key,
	cvId int null,
	schoolName varchar(255) null,
	facultyName varchar(255) null,
	fieldOfStudy varchar(255) null,
	levelOfEducation varchar(255) null,
	studyStatus varchar(255) null,
	timeSpentForStudy varchar(255) null
);

