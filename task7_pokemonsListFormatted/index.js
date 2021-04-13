let current_page = 0;

//to find out the number of pages
fetch("allPokemonsCall.php")
	.then((response) => {
		return response.json();
	})
	.then((result) => {
		printPages(result);
	});

function printPages(numberOfPages) {
	for (i = 0; i <= numberOfPages; i++) {
		const newButton = document.createElement("button");
		newButton.textContent = i + 1;
		newButton.id = i;
		newButton.className = "pageNumber";
		newButton.onclick = () => {
			console.log("Beginning of page button " + current_page);
			document.querySelector("#pokemonContainer").innerHTML = "";
			current_page = newButton.id;
			getNewPage(current_page);

			let last_page = document.querySelectorAll(".pageNumber").length - 1;

			if (current_page == 0) {
				document.getElementById("back").disabled = true;
				document.getElementById("next").disabled = false;
			} else if (current_page == last_page) {
				document.getElementById("back").disabled = false;
				document.getElementById("next").disabled = true;
			} else {
				document.getElementById("back").disabled = false;
				document.getElementById("next").disabled = false;
			}

			console.log("last page is " + last_page);
			console.log("End of page button " + current_page);
		};

		document.getElementById("pages").appendChild(newButton);
	}
}

function getNewPage(pageNumber) {
	fetch(`formatted_pokemon.php?page=${pageNumber}`)
		.then((response) => {
			return response.json();
		})
		.then((allPokemons) => {
			allPokemons.forEach((pokemon) => {
				fetchPokemonData(pokemon);
			});
		});

	function fetchPokemonData(pokemon) {
		let url = pokemon.url;
		fetch(url)
			.then((response) => {
				return response.json();
			})
			.then((pokeData) => {
				addPokemon(pokeData);
			});
	}

	function addPokemon(pokeData) {
		const newEl = document.createElement("div");

		newEl.className = "pokemon";
		newEl.onclick = addImage;
		newEl.id = `pokemon${pokeData.id}`;

		newEl.innerHTML = `<div>${pokeData.name}</div>`;

		document.querySelector("#pokemonContainer").appendChild(newEl);

		function addImage() {
			const newImage = document.createElement("div");
			newImage.id = `pokeImage${pokeData.id}`;
			newImage.className = "hidden";
			newImage.innerHTML = `<img
            src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/${pokeData.id}.png"
          />`;
			document.getElementById(`pokemon${pokeData.id}`).appendChild(newImage);
			document.getElementById(`pokeImage${pokeData.id}`).classList.toggle("visible");
		}
	}
}

document.getElementById("next").addEventListener("click", () => {
	console.log("Beginning of next " + current_page);
	document.querySelector("#pokemonContainer").innerHTML = "";
	current_page++;
	getNewPage(current_page);

	if (current_page + 1 == document.getElementById("pages").lastChild.innerHTML) {
		document.getElementById("next").disabled = true;
	}

	document.getElementById("back").disabled = false;
	console.log("End of next " + current_page);
});

document.getElementById("back").addEventListener("click", () => {
	console.log("Beginning of back " + current_page);
	document.querySelector("#pokemonContainer").innerHTML = "";
	current_page--;
	getNewPage(current_page);
	if (current_page == 0) {
		document.getElementById("back").disabled = true;
	}
	document.getElementById("next").disabled = false;
	console.log("End of back " + current_page);
});

document.getElementById("back").disabled = true;

getNewPage(current_page);

console.log("initial page " + current_page);
