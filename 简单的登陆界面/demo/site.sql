

create database if not exists `site`;
use `site`;
drop table if exists `user`;
create table `user`(
`id` tinyint unsigned auto_increment key,
`user` varchar(20) not null,
`passwd` varchar(32) not null
);
insert into `user`(`user`,`passwd`) values ('admin','21232f297a57a5a743894a0e4a801fc3');  //admin
insert into `user`(`user`,`passwd`) values ('laowang','b1132aa640bd78495f38f611d7cc0d19');   //laowang