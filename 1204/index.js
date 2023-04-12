require('dotenv').config();
const express = require("express")
const bodyParser = require("body-parser")
const port = process.env.PORT
const app = express()
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: false}));

app.use('/public', express.static('public'))

app.get('/sobre', (_,res) => {
    res.json({nome: "Pedro"})
})
app.post('/salvar', (req, res) => {
    const {nome} = req.body
    res.json({nome})
})

app.listen(port, () => {
    console.log(`servidor rodando na porta ${port}`)
})