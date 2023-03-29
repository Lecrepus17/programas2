const moment = require("moment");

console.log(moment().format('DD/MM/YYYY h:m:s'))

const inicio = "2023-03-29 09:10"
const termino = "2023-03-29 12:00"

console.log(moment().isBetween(inicio,termino))