//vetores
const vetor = [1,2,3,4,5]
//const a = vetor[0]
//const b = vetor[1]
//const c = vetor[2]
//const d = vetor[3]
//const e = vetor[4]
//mesma coisa do de cima, só mais rápido
const [a,b,c,d,e] = vetor
//objetos
const pessoa = {nome: 'Pedro', sobrenome: 'Sperotto'}

//const nome = pessoa.nome
//const sobrenome = pessoa.sobrenome
//mesma coisa do de cima, só mais rápido 
const {sobrenome:ultimo, nome} = pessoa
//( : para renomear variavel )

//funções
function soma (a, b) {
    return a + b;
}
//arrow function
const soma1 = (a, b) => {
    return a + b;
}
//mesma coisa de cima
const soma2 = (a,b) => a+b;
//cria e ja executa função
console.log(((a,b) => a+b)(3,5))


const n = "Pedro"
const s = "Sperotto"
const nomeCompleto = `${n} ${4+8} ${s}`
console.log(nomeCompleto)

// Operador...     ...só no final, pega tudo que sobrar
const alunos = [1234, 7.0, 8.0, 9.0]

const [matricula, ...notas] = alunos

console.log(matricula, notas)


const mostraNome = p => p.nome + " " + p.sobrenome
console.log(mostraNome(pessoa))
//mesma coisa de cima
const mostraNome2 = ({nome, sobrenome}) => `${nome} ${sobrenome}`
console.log(mostraNome2(pessoa))




// repetição
const numeros = [1,2,3,4,5]
//while
let i = 0
while (i  < numeros.length){
    console.log(numeros[i++])
}
// for
for(let i = 0; i < numeros.length; i++){
    console.log(numeros[i])
}
// for in // indices
for (let n in numeros){
    console.log(n)
}
//for of// valores
for (let n of numeros){
    console.log(n)
}