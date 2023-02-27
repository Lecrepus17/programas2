/*
ctrl shift aspas

mysql -u root*/

drop table if exists matriculas;
drop table if exists disciplinas;
drop table if exists alunos;

create table alunos (
    id int not null auto_increment,
    nome varchar(100) not null,
    curso varchar(100) not null, 
    primary key(id)
);


create table disciplinas (
    id int not null auto_increment,
    nome varchar(100) not null, 
    primary key(id)
);


create table matriculas (
    id int not null auto_increment,
    aluno_id int,
    disciplina_id int, 
    primary key(id)
);
