use laravel;
drop table PHPUser;
create table PHPUser(
    userId int AUTO_INCREMENT primary key not null  ,
    userName varchar(30) not null,
    userSurName varchar(30) not null,
    userEmail varchar(30) not null
);
select * from PHPUser;