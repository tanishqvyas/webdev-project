// making a variable for submit button
const btn = document.querySelectorAll('.button');
const popUp = document.getElementById('successful-submit');

// Adding event listner for the submit button
for (var i = btn.length - 1; i >= 0; i--) {
	btn[i].addEventListener('click', onsubmit);
}









function onsubmit(event) 
{
	// Getting Requester's details
	var personName = prompt("Please enter your Name");
	var personNumber = prompt("Please enter your contact number");

	event.preventDefault();

	// Getting respective owner's email
	var ownerEmail = this.parentElement.children[0].children[1].children[4].textContent;


	/*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>..
	var nodemailer = require('nodemailer');

	var transporter = nodemailer.createTransport({
	  service: 'gmail',
	  auth: {
	    user: 'tanishqvyas069@gmail.com',
	    pass: 'M!SCH!EFM@N@GED'
	  }
	});

	var mailOptions = {
	  from: 'tanishqvyas069@gmail.com',
	  to: ownerEmail,
	  subject: 'PET Adopt request',
	  text: 'We are happy to inform you that' + personName + " is willing to adopt your PET. Contact " + personNumber
	};

	transporter.sendMail(mailOptions, function(error, info){
	  if (error) {
	    console.log(error);
	  } else {
	    console.log('Email sent: ' + info.response);
	  }
	});


	//?>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */






	// Displaying confirmation popup
	popUp.style.opacity = 1;
	setTimeout(()=> popUp.style.opacity = 0, 3000);
	
}

