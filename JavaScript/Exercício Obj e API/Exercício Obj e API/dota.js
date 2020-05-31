let tabela = document.getElementById('')

fetch('https://api.opendota.com/api/matches/4973348952')
.then(
	response => response.json()
	)
.then(data=>{
	console.log(data)
	})	
.catch(error => console.error("Algo deu errado para carregar sua API: " + error.message))