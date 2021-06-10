let phrase= ["Un service de qualité", "Satisfait ou remboursé", "Votre projet est le notre" ];

let text = document.getElementById('defil');
let play, current;

// console.log(phrase[1]);

text.innerHTML = phrase[0]; 

let suivant= 0
// avancer();
play=setInterval(avancer, 6000);
// reculer();



function avancer() {
	current = suivant;
	suivant++

	if (suivant==phrase.length) {
		suivant=0
	}
	// console.log(10)
	$(text).animate({left: '-200', 'opacity': '-=0.9'}, 2500, inner);// = ""//phrase[current];	
	//text.innerHTML = phrase[suivant];

}

function inner (){
	// console.log("inner");

	$(text).animate({left: '0px', 'opacity': '+=0.9'}, 2500 );

	text.innerHTML = phrase[suivant];
}