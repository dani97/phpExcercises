/**
 * 
 */

var loginbutton = document.getElementById('login-button');
loginbutton.addEventListener('click',showLoginForm);
function showLoginForm() {
	var form = document.getElementById("login-form");
	var closer = document.getElementById('login-closer');
	form.classList.add('slider');
	loginbutton.parentNode.classList.add('hide');
	closer.addEventListener('click',loginClose);
}

function loginClose() {
	var form = document.getElementById("login-form");
	form.classList.remove('slider');
	loginbutton.parentNode.classList.remove('hide');
}

var signupbutton = document.getElementById('signup-button');
signupbutton.addEventListener('click',showSignupForm);
function showSignupForm() {
	var form = document.getElementById("signup-form");
	var closer = document.getElementById('signup-closer');
	form.classList.add('slider');
	signupbutton.parentNode.classList.add('hide');
	closer.addEventListener('click',signupClose);
}

function signupClose() {
	var form = document.getElementById("signup-form");
	form.classList.remove('slider');
	signupbutton.parentNode.classList.remove('hide');
}