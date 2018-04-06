/**
 * Author:  Gabriel Melo <dev.gabrielomelo@gmail.com>
 * Created: May 20, 2016
 * Scripts from UpVest database
 */

create database upvest;

create table users(
    id int(5) auto_increment,
    email varchar(30) not null,
    password char(40) not null,
    name varchar(20) not null,
    state char(2) not null,
    primary key(id)
);

create table ranking(
    id int(5) auto_increment,
    userId int(5) foreign key,
    points int(6) not null,
    level int(2) not null,
    needPoints int(6) not null,
    totalAnswered int(5) not null,
    rightAnswered int(5) not null,
    primary key(id),
    index(userId) foreign key (userId)
    references users(id) 
    on update no action
    on delete no action
);

create table questions(
    id int(3) primary key auto_increment,
    question varchar(500) not null,
    
);

create table answers(
    id int(3) primary key auto_increment,
    question_id int(3) not null,
    alt1 varchar(300) not null,
    alt2 varchar(300) not null,
    alt3 varchar(300) not null,
    alt4 varchar(300) not null,
    index(question_id) foreign key
    references questions(id)
    on delete no action
    on update no action
); 


