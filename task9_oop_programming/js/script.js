const bird = {
	legs: 2,
	wings: 2,
	fly: function () {
		console.log("Flap!");
		return "I can fly";
	},
};

// blueprint to create objects of the same class
class Bird {
	legs = 2;
	wings = 2;
	fly = function () {
		console.log("Flap!");
		return "I can fly";
	};
	showYourself = function () {
		// the keyword THIS refers to the current object (current instance of the class), not the original class!!!!!
		console.log(`Hi, I have ${this.legs} legs and ${this.wings} wings`);
	};
}

class Peacock extends Bird {
	name = "Peacock";
	spreadTail = function () {
		console.log("Look at my tail");
	};
}

const NUMBER_OF_BIRDS = 20;
let birds = [];
let birds1 = [];

// to make 20 birds
for (let i = 0; i < NUMBER_OF_BIRDS; i++) {
	birds[i] = {
		legs: 2,
		wings: 2,
		fly: function () {
			console.log("Flap!");
			return "I can fly";
		},
	};
}

for (let i = 0; i < NUMBER_OF_BIRDS; i++) {
	birds1[i] = new Peacock();
}

console.log(`${bird.legs}`);
bird.fly();
console.log(`${bird.fly()}`);

console.log(birds);
console.log(birds[3]);

// instance of class Bird
const bird1 = new Bird();
console.log(bird1);

console.log("Bird one is " + bird1.fly());

const peacock1 = new Peacock();

console.log(peacock1);
console.log(birds1);

bird1.showYourself();
bird1.fly();

class Background {
	constructor(el) {
		this.el = el;
	}

	init = function () {
		const bg = document.createElement("div");
		bg.id = "background";
		bg.setAttribute("style", "z-index: -1");
		bg.style.top = "0";
		bg.style.left = "0";
		bg.style.backgroundImage = "url(img/bg.png)";
		bg.style.backgroundRepeatY = "no-repeat";
		bg.style.position = "fixed";
		bg.style.width = "100%";
		bg.style.height = "100%";

		this.el.appendChild(bg);
	};
}

const background = new Background(document.body);
background.init();

class NewBird {
	constructor(width, el) {
		this.width = width;

		this.el = el;
	}

	fly = function () {
		console.log("Flap!");
		return "I can fly";
	};

	showBird = function () {
		const createBird = document.createElement("img");
		createBird.backgroundImage = "url(img/bg.png)";

		createBird.id = "bird" + Math.random() * 10;
		createBird.src = "img/bird.png";
		createBird.width = this.width;
		this.el.appendChild(createBird);
	};
}

const bird3 = new NewBird(Math.random() * 50, document.body);
console.log(bird3);
bird3.showBird();

const newBirds = [];

for (let i = 0; i < 50; i++) {
	newBirds[i] = new NewBird(Math.random() * 100, document.body);
	newBirds[i].showBird();
}
