fetch("https://football-data1.p.rapidapi.com/match/playbyplay?matchId=18656", {
	"method": "GET",
	"headers": {
		"x-rapidapi-key": "0b550a0a81msh4bfef19b201261ap14579ajsneeb0e26711bd",
		"x-rapidapi-host": "football-data1.p.rapidapi.com"
	}
})
.then(response =>response.json())
.then(data=>{

document.getElementById("api").innerHTML=data.homeTeam.name + " - " + data.awayTeam.name + " :   " + data.tournament.name + " **** " + data.stage.name + " ----- " + data.round.name; 


})
.catch(err => {
	console.error(err);
});
