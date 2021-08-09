create database if not exists posts;

use posts;

create table posts (
    -- this will auto increment ID starting from 1
    id integer not null PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) not null,
    content varchar(1000) not null,
    date datetime not null
);

insert into posts (subject, content, date) values ('This is the first subject', 'Some random text in the first post. This is just a random text for some post in this example from the tutorial video.', '2021-05-20 21:00:00');

select subject from posts;

select * from posts;

select * from posts where id = 1;

select * from posts where id = 1 and subject = "This is the first subject";

select * from posts where id = 1 or subject = "Blabla is the first subject";

update posts
set subject = 'subject 1', content = 'this is new content'
where id = 1;

insert into posts (subject, content, date) values ('Subject 2', 'New text here', '2021-05-20 22:00:00');

delete from posts
where id = 2;

select * from posts
order by id desc;

-- Another database

create database if not exists loginSystem;

use loginSystem;

create table users (
    user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    user_first_name varchar(256) not null,
    user_last_name varchar(256) not null,
    user_email varchar(256) not null,
    user_role varchar(256) not null,
    user_pwd varchar(256) not null
);

insert into users (user_first_name, user_last_name, user_email, user_role, user_pwd)
values ('Daniel', 'Nielsen', 'test@test.fi', 'Admin', 'secret');

insert into users (user_first_name, user_last_name, user_email, user_role, user_pwd)
values ('Ivan', 'Petrovich', 'test11@test.fi', 'User', 'secret');

