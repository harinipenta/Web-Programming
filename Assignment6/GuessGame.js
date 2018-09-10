var secretnum;
var ChancesCount;
var thoughtNumbers = [];
var from = "0";
var to = "100";
var chances;

function reset() {
	document.guessForm.userGuess.value = "";
	document.guessForm.hint.value = "Enter the Number and Click on Guess.";
	document.guessForm.chance.value = "";
	document.guessForm.guesses.value = "";
	document.guessForm.userGuess.focus();
	thoughtNumbers = [];
	chances=7;
	ChancesCount = thoughtNumbers.length;
	document.guessForm.guesses.value = "You have made " + ChancesCount + " guesses";
	document.guessForm.chance.value = "You have " + chances + " chance(s) left";
	secretnum = 0 + Math.floor(Math.random() *99);
}

function guess() {
	var guessNumber = parseInt(document.guessForm.userGuess.value,10);
	chances--;
	var guessMessage = "";
	thoughtNumbers.push(guessNumber);
		ChancesCount = thoughtNumbers.length;
		for (var i = 0; i < ChancesCount; i++) {
			guessMessage += thoughtNumbers[i] + " ";
		}
		document.guessForm.guesses.value="Your Guesses: " + guessMessage;

	if(guessNumber >= 0 && guessNumber <= 100) {
			if(guessNumber == secretnum) {
				 var attmpt = "";
					if(ChancesCount === 1){attmpt=" attempt ";} else {attmpt=" attempts ";}
					document.guessForm.hint.value = "";
					document.guessForm.guesses.value = "";
					window.alert("Congratulations! Your Selections is corect! You Won!\n You took" + ChancesCount + attmpt + "to guess the Number.");
					location.reload();
			}
			else{
				if(guessNumber > secretnum) {
					document.guessForm.hint.value = "Result is less than " + guessNumber + ".";
						}
				else{
				document.guessForm.hint.value = "Result is greater than " + guessNumber + ".";
				}
				if(chances==0){
					window.alert("Oops!! No turns left.\n Result is " + secretnum + ".");
					reset();
				}
			}
			document.guessForm.chance.value = "You have " + chances + " chance(s) left";
	} else {
		window.alert("The number you entered is not valid or its not in the given range.Please enter a valid number.");
	}
	document.guessForm.userGuess.value = "";
	document.guessForm.userGuess.focus();
}
