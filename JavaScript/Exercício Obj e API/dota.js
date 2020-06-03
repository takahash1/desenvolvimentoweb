let data = document.getElementById('data')
let inf1 = document.getElementById('inf1')
let inf2 = document.getElementById('inf2')	
let inf3 = document.getElementById('inf3')
let inf4 = document.getElementById('inf4')
let inf5 = document.getElementById('inf5')

fetch('https://api.opendota.com/api/matches/4973348952')
.then(
	response => response.json()
	)
.then(data=>{
		data.innerHTML = data.match_id;
		inf1.innerHTML = data.radiant_team.name;
		inf2.innerHTML = data.dire_team.name;
		inf3.innerHTML = (data.duration)/60;
		inf4.innerHTML = data.radiant_win;
	}
)	
.catch(error => console.error("Algo deu errado para carregar sua API: " + error.message))