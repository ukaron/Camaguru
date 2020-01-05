<?php
require ('database.php');
$DBH->beginTransaction();
$DBH->query("create table users
(
	login varchar(255) not null,
	email varchar(255) not null,
	fname varchar(255) null,
	lname varchar(255) null,
	pass char(64) not null,
	token varchar(255) null,
	varif int default 0 null,
	remember_token varchar(100) null
);

create unique index users_email_uindex
	on users (email);

create unique index users_login_uindex
	on users (login);

alter table users
	add constraint users_pk
		primary key (login);
");
$DBH->commit();
?>

