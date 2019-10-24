function displayNone(id) {
	document.getElementById(id).style.display = 'none';
}
function displayBlock(id) {
	document.getElementById(id).style.display = 'block';
}
function loginLength() {
	var loginEl = document.getElementById('login');
	if(loginEl.value.length >1){
		loginEl.style.borderColor = 'green';
	} else {
		loginEl.style.borderColor = 'red';
	}
}
function passLength() {
	var passEl = document.getElementById('pass');
	if (passEl.value.length > 5) {
		passEl.style.borderColor = 'green';
	} else {
		passEl.style.borderColor = 'red';
	}
}
function authSubmit() {
	if(document.getElementById('pass').value.length < 6 || document.getElementById('login').value.length < 2) {
		return false;
	} else {
		return true;
	}
}
function myDelete() {
	x = confirm('Delete?');
	return x;
}
