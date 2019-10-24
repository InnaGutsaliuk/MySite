function myDelete() {
	return confirm('Вы действительно хотите удалить?');
}
function pass() {
	ps = document.getElementById('ps');
	ps1 = document.getElementById('ps1');

	ok = 'url("/skins/admin/img/ok.jpg")';
	no = 'url("/skins/admin/img/del-icon.png")';

	ps1.value = '';

	if (ps.value.length < 6 || ps.value.length > 12) {
		ps.style.backgroundImage = no;
	} else {
		ps.style.backgroundImage = ok;
	}
}

function pass1() {
	if (ps.value == ps1.value){
		ps1.style.backgroundImage = ok;
	} else {
		ps1.style.backgroundImage = no;
	}
}
