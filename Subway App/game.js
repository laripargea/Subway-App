var winPositions = [[0, 1, 2], [3, 4, 5], [6, 7, 8], [0, 3, 6], [1, 4, 7], [2, 5, 8], [0, 4, 8], [2, 4, 6]];
var boxes = document.getElementsByClassName("box");
var play = document.getElementById("button");
var gameOver = false;

function setMessage(text) {
	var message = document.getElementById("message");
    message.innerHTML = text;
};

function freeBox(box) {
	return (box.innerHTML !== "X" && box.innerHTML !== "0");
};

function colorBoxes(finalBoxes, color) {
	for (var i = 0; i < finalBoxes.length; i++) {
		document.getElementById(finalBoxes[i]).style.backgroundColor = color;
	}
};

function drawCheck() {
	var draw = true;
	for (var id = 0; id < 9; id++) {
		if(freeBox(document.getElementById(id))) {
			draw = false;
			break;
		}
	}
	return draw;
};

function resetGame() {
	gameOver = false;
	setMessage("Du hast die Chance ein Sandwich zu gewinnen. Spiel jetzt!");

	for (var id = 0; id < 9; id++) {
		var box = document.getElementById(id);
		box.innerHTML = "";
		box.style.backgroundColor = "yellowgreen";
	}
};

function rand(min, max) {
    return min + Math.floor(Math.random() * (max - min + 1));
};

function makeMove() {
	for (var id = 0; id < 9; id++) {
		box = document.getElementById(rand(0, 8));

		if(freeBox(box)) {
			box.innerHTML = "0";
			break;
		}
	}
};

function findBoxes(mark) {
	var searchedBoxes = [];

	for (var id = 0; id < 9; id++) {
		if(document.getElementById(id).innerHTML === mark)
			searchedBoxes.push(id);
	}

	return searchedBoxes;
};

function winCheck(mark) {
	var win = false;

	for (var i = 0; i < winPositions.length; i++ ) {
		win = winPositions[i].every(el => findBoxes(mark).indexOf(el) >= 0);

		if(win) {
			win = winPositions[i];
			break;
		}
	}

	return win;
};

function chooseBox() {
	if(!gameOver) {
		setMessage("Du bist dran!");
	    var id = this.getAttribute("id");
	    var box = document.getElementById(id);

	    if(freeBox(box)) {
	    	box.innerHTML = "X";
	    	var win = winCheck("X");

	    	if(!win) {
	    		makeMove();
	    		var lose = winCheck("0");

	    		if(!lose) {
	    			if(drawCheck()) {
	    				gameOver = true;
	    				setMessage("Draw");
	    			}
	    		}
	    		else {
	    			gameOver = true;
	    			setMessage("Sorry :(, vielleicht nächstes Mal...");
	    			colorBoxes(lose, "red");
	    		}
	    	}
	    	else {
	    		gameOver = true
	    		setMessage("SUPER! Du hast ein Big beef melt gewonnen! Code des Monats ist: 7Y78JKL0.");
	    		colorBoxes(win, "green");
	    	}
	    }
	    else {
	    	setMessage("Kein freier Platz!");
	    }
	}
};

for (var i = 0; i < 9; i++) {
    boxes[i].addEventListener('click', chooseBox, false);
}

play.addEventListener('click', resetGame, false);