

//require('dotenv').config();
const express = require("express")
const bodyParser = require("body-parser")
const moment = require('moment');
let ID  = 1
    let cursos = [
      { id: 0, nome: 'Curso de Node.js' },
    ];
    let alunos = [
        { id: 0, nome: 'pedro', curso: 0, data_nasc:'2006-04-17' },
      ];
const port = process.env.PORT
const app = express()

// rota imagem
app.use('/imagens', express.static(__dirname + '/arquivos'));

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: false}));

app.use('/public', express.static('public'))





app.listen(port, () => {
    console.log(`servidor rodando na porta ${port}`)
})



// lista todos os cursos
app.get('/cursos', (req,res) => {
    res.json(cursos)
})
  
  // adiciona um curso
app.post('/cursos', (req,res) => {
    const {nome} = req.body
    cursos.push({id: ID++, nome})
    res.json({message: 'OK'})
})
  
  // altera um curso
  app.post('/cursos/alterar/:id', (req, res) => {
    const { nome } = req.body;
    const { id } = req.params;
    cursos = cursos.map(curso => {
      if (curso.id == id) {
        curso.nome = nome;
      }
      return curso;
    });
    const curso = cursos.find(c => c.id == id);
    res.send(`Curso ${curso.nome} atualizado com sucesso!`);
})


  // remove um curso
  app.delete('/cursos/delete/:id', (req,res) => {
    const {id} = req.params
    const curso = cursos.find(c => c.id == id);
    cursos = cursos.filter(c => c.id != id)
    res.send(`Curso ${curso.nome} removido com sucesso!`);
})


// lista todos os alunos
app.get('/alunos', (req,res) => {

    

    const alunosComNomeCurso = alunos.map(a => {
        const curso = cursos.find(c => c.id === a.curso);
        const nomeCurso = curso ? curso.nome : 'Curso não encontrado';
        return { ...a, nomeCurso };
      });
      res.json(alunosComNomeCurso);
  
    
})
  
  // adiciona um aluno
app.post('/alunos', (req,res) => {
  const {nome, curso, data_nasc} = req.body
  
  // verifica se o nome do aluno e o id do curso foram informados
  if (!nome || !data_nasc) {
      return res.status(400).json({message: 'Nome do aluno e a data de nascimento são obrigatórios '})
  }
  
  // verifica se o curso existe
  if (!cursos.some(c => c.id === curso)) {
      return res.status(404).json({message: 'Curso não encontrado'})
  }
  
  alunos.push({id: ID++, nome, curso, data_nasc})
  res.json({message: 'OK'})
})

  
  // altera um aluno

app.post('/alunos/alterar/:id', (req, res) => {
    const { nome, curso, data_nasc } = req.body;
    const { id } = req.params;
  
    alunos = alunos.map(aluno => {
      if (aluno.id == id) {
        aluno.nome = nome;
        aluno.curso = curso;
        aluno.data_nasc = data_nasc;
      }
      return aluno;
    });
  
    const aluno = alunos.find(a => a.id == id);
    res.send(`Aluno ${aluno.nome} atualizado com sucesso!`);
  });
  


// remove um aluno
app.delete('/alunos/delete/:id', (req,res) => {
    const {id} = req.params
    const aluno = alunos.find(a => a.id == id);
    alunos = alunos.filter(a => a.id != id)
    res.send(`Aluno ${aluno.nome} removido com sucesso!`);
  })
  