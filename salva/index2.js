require('dotenv').config();
const jwt = require("jsonwebtoken")
const express = require("express")
const bodyParser = require("body-parser")
const moment = require('moment');
const port = process.env.PORT
const app = express()


let lista_negra = [];

    const verificaToken = (req,res, next) => {
        const {authorization} = req.headers
        if (lista_negra.includes(authorization)) return res.status(400).json({
            error: "token não informado"
        })
        if (!authorization) return res.status(400).json({
            error: "token não informado"
        })
        const parts = authorization.split(" ")
    
        if (parts.length !== 2) return res.status(400).json({
            error: "Erro no token"
        })
    
        const [bearer, token] = parts
    
        if(!/^bearer$/i.test(bearer)) return res.status(400).json({
            error: "Token mal formatado"
        })
    
        if(!token) return req.status(400).json({
            error: "Não há token"
        })
    
        const authSecret = process.env.AUTH_SECRET
        try {
            const {email} = jwt.verify(token, authSecret)
            if(!email) return next(new Error("Não autorizado"))
            return next()
        }catch(e){
            return next(new Error(" Token inválido"))
        }

    }

let cursos = [
    { id: 0, nome: 'Curso de Node.js' },
  ];

app.use(bodyParser.json(0));
app.use(bodyParser.urlencoded({extended: false}));
app.use('/public', express.static('public'))

app.listen(port, () => {
    console.log(`servidor rodando na porta ${port}`)
})

app.get('/cursos', verificaToken, (_, res) => {
    res.json([{cursos}])
})

app.post(('/login'), (req, res) => {
    const {email, senha} = req.body
    if (email !== "admin@gmail.com")
        res.status(400).json({
            error: "Falha na autenticação!"
        })
    if (senha !== "123")
    res.status(400).json({
        error: "Falha na autenticação!"
    })
    const authSecret = process.env.AUTH_SECRET
    const token = jwt.sign({email}, authSecret, {
        expiresIn: 24 * 60 * 60
    })
    return res.json({
        token,
        message: "Atenticação bem sucedida!"
    })
})

app.get('/sair', (req, res) => {
    lista_negra.push(req.header.authorization);
})