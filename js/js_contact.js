const form = document.getElementById('form');
 fullname = document.getElementById('fullname');
 lastname = document.getElementById('lastname');
 email = document.getElementById('email');
 subject = document.getElementById('subject');
 message = document.getElementById('message');

form.addEventListener('submit', e => {
	if(!checkInputs()){
		e.preventDefault();
	}
});

function checkInputs() {
	 fullnameValue = fullname.value.trim();
	 lastnameValue = lastname.value.trim();
	 emailValue = email.value.trim(); 
	 subjectValue = subject.value.trim();
	 messageValue = message.value.trim();
	 
	 isSucessful = true; 

	if(fullnameValue === '') {
		setErrorFor(fullname, 'Fullname cannot be blank');
		isSucessful = false;
	} else {
		setSuccessFor(fullname);
	}

	if(lastnameValue === '') {
		setErrorFor(lastname, 'Lastname cannot be blank');
		isSucessful = false;
	} else {
		setSuccessFor(lastname);
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
		isSucessful = false;
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
	if(subjectValue === '') {
		setErrorFor(subject, 'Subject cannot be blank');
		isSucessful = false;
	} else {
		setSuccessFor(subject);
	}
	if(messageValue === '') {
		setErrorFor(message, 'Message cannot be blank');
		isSucessful = false;
	} else {
		setSuccessFor(message);
		
	}

	return isSucessful;
	
}
function setErrorFor(input, message) {
	 formControl = input.parentElement;
	 small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	formControl = input.parentElement;
	formControl.className = 'form-control success';
}
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}