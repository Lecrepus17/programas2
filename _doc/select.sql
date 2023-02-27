select a.nome, count(m.aluno_id) from alunos a
join matriculas m
on m.aluno_id = a.id
group by a.nome;

select d.nome as disciplina_pedro from alunos a
join matriculas m
on m.aluno_id = a.id
join disciplinas d
on d.id = m.disciplina_id
where a.nome = 'pedro';

select d.nome as disciplina_vitor from alunos a
join matriculas m
on m.aluno_id = a.id
join disciplinas d
on d.id = m.disciplina_id
where a.nome = 'vitor';

