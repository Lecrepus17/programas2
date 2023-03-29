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



/*
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
*/

// map, filter, reduce, find   
//------------------------------------------------------------------------------------------------------------------------------------------
const numeros = [1,2,8,4,5]
//------------------------------------------------------------------------------------------------------------------------------------------
const soma123 = numeros.reduce(function(resposta, atual){
//atual 1
//resposta 0
return atual + resposta

}, 0)
console.log('soma: ',soma123)

const soma65 = numeros.reduce((p,a)=>p+a,0)
console.log('soma: ',soma65)

const vetorDeObjetos = numeros.map(n=>({n}))
console.log(vetorDeObjetos)
const vetorDeObjetos2 = numeros.reduce((p, n)=>[...p, {n}],[])
console.log(vetorDeObjetos2)
//------------------------------------------------------------------------------------------------------------------------------------------
const somentePares2 = numeros.map(v => v * 2)
console.log(somentePares2)
//------------------------------------------------------------------------------------------------------------------------------------------
const num = numeros.find(function(v){
    if(v % 2 == 0 ){
        return true
    }else {
        return false
    }
})

//------------------------------------------------------------------------------------------------------------------------------------------
// retornar o ´rimeiro encontrado, return verdadeiro ou falso apenas
const nume = numeros.find(v =>v%2 ==0)

console.log('número: ',nume)

//------------------------------------------------------------------------------------------------------------------------------------------
//retorna todos pares
const todosPares = numeros.filter(v=>v%2===0)
console.log('número: ',todosPares)

//------------------------------------------------------------------------------------------------------------------------------------------
//  includes, forEach, every (E), some (OU)  

//------------------------------------------------------------------------------------------------------------------------------------------
//verifica se tem um valor no vetor
if(numeros.includes(2)){
    console.log('O vetor números tem o valor dois')
}else{
    console.log('O vetor números não tem o valor dois')
}

//------------------------------------------------------------------------------------------------------------------------------------------
// verificar se agum numero é par
const existePar = numeros.some(function(v){
    if(v % 2 === 0 ){
        return true
    }else {
        return false
    }
})

//------------------------------------------------------------------------------------------------------------------------------------------
//verifica se os numeros estão em ordem crescente
const numerosOrdem = numeros.every(function(v,i,k){
    if(i===0 || v >= k[i-1]){
        k = v
        return true
    }else {
        return false
    }
})
console.log('ordem: ',numerosOrdem)
//------------------------------------------------------------------------------------------------------------------------------------------
//não retorna nada
let soma12 = 0
numeros.forEach(function(v,i,k){
    console.log(v)
    soma12 += v
})
console.log(soma12)

const somentePares = []
numeros.forEach(v=> somentePares.push(v*2))
console.log(somentePares)
//------------------------------------------------------------------------------------------------------------------------------------------
const numerosEmOrdem = numeros.every((v,i,k)=>i===0 || v >= k[i-1])
console.log('ordem: ',numerosEmOrdem)
//------------------------------------------------------------------------------------------------------------------------------------------
// findLast, findIndex

const pos = numeros.findIndex(v =>v%2 ==0)

// retorna posição
console.log('número: ',pos)

// mostra o ultimo
const ultimoNPar = numeros.findLast(v =>v%2 ==0)

console.log('número: ',ultimoNPar)

//------------------------------------------------------------------------------------------------------------------------------------------
const dias = ['DOMINGO', 'SEGUNDA', 'TERCA', 'QUARTA', 'QUINTA', 'SEXTA', 'SABADO']
const periodos = [
    {inicio: '08:00', termino: '12:00', dias: ['SABADO', 'DOMINGO']},
    {inicio: '17:00', termino: '20:00', dias: ['SABADO', 'SEXTA']}
]

const periodosPorDia = dias.map(dia => {
    const periodosDoDia = periodos.filter(periodo => periodo.dias.includes(dia));
    return { dia, periodos: periodosDoDia };
    
  });
  
  console.log(periodosPorDia);