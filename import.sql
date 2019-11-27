-- auto-generated definition
create database fake_ap;
create user 'zeus'@localhost identified by 'Pa$$w0rd';
grant all privileges on fake_ap.* to 'zeus'@localhost;
flush privileges;

create table credentials
(
    id                int auto_increment
        primary key,
    email             varchar(200) null,
    password          varchar(50)  null,
    score             smallint     null,
    registration_date datetime     null
);


INSERT INTO fake_ap.credentials (id, email, password, score, registration_date) VALUES (1, 'a*************@p****.org', '***********', 2, '2019-11-25 20:18:00');
INSERT INTO fake_ap.credentials (id, email, password, score, registration_date) VALUES (2, 'a*************@a****.com', '**************', 4, '2019-11-25 20:18:45');
INSERT INTO fake_ap.credentials (id, email, password, score, registration_date) VALUES (3, 's*************@g****.com', '************', 3, '2019-11-25 20:19:45');
INSERT INTO fake_ap.credentials (id, email, password, score, registration_date) VALUES (4, 'r*************@l****.it', '****************', 5, '2019-11-25 20:20:45');
INSERT INTO fake_ap.credentials (id, email, password, score, registration_date) VALUES (5, 't*************@y****.com', '*******', 1, '2019-11-25 20:24:45');