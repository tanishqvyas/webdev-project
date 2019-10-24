// making a variable for submit button
const btn = document.querySelector('.button');
const popUp = document.getElementById('successful-submit');

// Adding event listner for the submit button
btn.addEventListener('click', onsubmit);

function onsubmit(event) 
{
	event.preventDefault();
	popUp.style.opacity = 1;

	setTimeout(()=> popUp.style.opacity = 0, 3000);
	
}

