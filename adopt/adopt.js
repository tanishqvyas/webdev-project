// making a variable for submit button
const btn = document.querySelectorAll('.button');
const popUp = document.getElementById('successful-submit');

// Adding event listner for the submit button
for (var i = btn.length - 1; i >= 0; i--) {
	btn[i].addEventListener('click', onsubmit);
}


function onsubmit(event) 
{
	var personName = prompt("Please enter your Name");
	var personNumber = prompt("Please enter your contact number");

	event.preventDefault();
	popUp.style.opacity = 1;

	setTimeout(()=> popUp.style.opacity = 0, 3000);
	
}

