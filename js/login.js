form = document.getElementById('form');
 username = document.getElementById('username');
 password = document.getElementById('password');
 IdValue = document.getElementById('password2');

form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
	 usernameValue = username.value.trim();
   passwordValue = password.value.trim();
   IdValue = password2.value.trim();
	
	if(usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
	} else {
		setSuccessFor(username);
    }
    
    if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	} else {
        setSuccessFor(password);
    }

    if(IdValue === '') {
      setErrorFor(password2, 'Password cannot be blank');
    } else {
        setSuccessFor(password2);
        location.replace("index.html");
      }
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