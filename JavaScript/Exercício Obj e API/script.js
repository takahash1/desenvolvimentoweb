// Ex 1
var receita = {
    titulo: "Brigadeiro",
    porcoes: 10,
    ingredientes: ["Leite condensado", "Achocolatado em pó", "Manteiga"]
}
console.log(receita.titulo);
console.log(receita.porcoes);
console.log(receita.ingredientes[0]);
console.log(receita.ingredientes[1]);
console.log(receita.ingredientes[2]);

// Ex 2
var livro =
[
{
	titulo : "Senhor dos Anéis",
	autor : "J. R. R. Tolkien",
	livroLido : false
},
{
	titulo : "A cabana",
	autor : "Willin P. Young",
	livroLido : true
},
{
	titulo : "O escaravelho do Diabo",
	autor : "Lúcia Machado de Almeida",
	livroLido : true
},
{
	titulo : "Harry Potter",
	autor : "J. K. Rowling",
	livroLido : false
}
]

for (var i = 0; i < livro.length; i++){
	console.log("Nome do livro " + [i + 1] +"; ");
	console.log(livro[i].titulo);
	console.log("Nome do Autor " + [i + 1] +"; ");
	console.log(livro[i].autor);
}

for (var i = 0; i < livro.length; i++){
	if(livro[i].livroLido == true){
		console.log("Você já leu este livro! " + "Título: " + livro[i].titulo + " Autor: " + livro[i].autor);
	}else{
		console.log("Você ainda não leu este livro. " + "Título: " + livro[i].titulo + " Autor: " + livro[i].autor);
	}
}

// Ex 3 e 4

fetch('https://dog.ceo/api/breeds/image/random')
.then(response => response.json())
.then(data => {
	console.log(data)
})
.catch(error => console.error("Algo deu errado para carregar sua API: " + error.message))

// Ex 5 e 6

let catchorro = document.getElementById("catchorro");

fetch('https://dog.ceo/api/breeds/image/random')
.then(
	response => 
		response.json()
		)
.then(
	data => {
		catchorro.src = data.message;
	}
)
.catch(
	error => 
	console.error("Algo deu errado para carregar sua API: " + error.message))
