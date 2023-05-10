

require('dotenv').config();
const express = require("express")
const bodyParser = require("body-parser")
const moment = require('moment');
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