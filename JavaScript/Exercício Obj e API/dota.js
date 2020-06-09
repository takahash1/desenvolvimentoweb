	let tabela = document.getElementById('tabela-dota');
	let linhaid = document.getElementById('linha-id');
	let linhatimerad = document.getElementById('linha-time-rad');	
	let linhatimedire = document.getElementById('linha-time-dire');
	let linhaduracao = document.getElementById('linha-duracao');
	let linhavenc = document.getElementById('linha-venc');

fetch('https://api.opendota.com/api/matches/4973348952')
.then(
	response => response.json()
	)
.then( 
	data => {
		console.log(data);		
		data.forEach( data => {

			let linha = tabela.insertRow(-1);
			let linhaid = linha.insertCel(0)
			let linhatimerad = linha.insertCel(1);
			let linhatimedire = linha.insertCel(2);
			let linhaduracao = linha.insertCel(3);
			let linhavenc = linha.insertCel(4);

			linhaid.innerHTML = data.match_id;
			linhatimerad.innerHTML = data.radiant_team.tag;
			linhatimedire.innerHTML = data.dire_team.tag;
			linhaduracao.innerHTML = data.duration;
			linhavenc.innerHTML = data.radiant_win;
			}
		)
	}
)
.catch(error => console.error("Algo deu errado para carregar sua API: " + error.message))