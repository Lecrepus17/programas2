

insert into nivel_ensino (nome_nivel) values ('Técnico Integrado'), ('Subsequente');

insert into cursos (nome_curso, nivel_ensino_idNivel_ensino) values ('Info', 1), ('agro', 2);
insert into turmas (nome_turma, cursos_idcursos) values ('1 ano', 1), ('2 ano', 2);
insert into alunos (nome_aluno, data_nasc, foto, turmas_idturmas) values ('Pedro Sperotto', '12/28/2006', 'caminho foto', 1), ('Ale Sperotto', '12/28/2007', 'caminho foto', 2);

