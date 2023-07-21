/*let notas = new Array();
let saida = "";

//entrada de notas
for (let index = 0; index < 5; index++){
    notas[index] = prompt("Inofrme a nota do " + (index + 1) + "º aluno");
}

//console.log(notas);

//saída de dados
for (let index = 0; index < 5; index++){
    saida += "<br>A nota do " + (index + 1) + "º é: " + notas[index];
}

document.write(saida);
*/

let notas = new Array();
let media = 0;


//entrada
for(let index = 0; index < 5; index++){
    notas[index] = parseFloatprompt("Informe a nota do " + (index + 1) + "º aluno: ");
}

//calcular média 
for(let index = 0; index < 6; index++){
    media += notas[index];
}
media / notas.length;

document.write("A nota média da turma é: " + media);