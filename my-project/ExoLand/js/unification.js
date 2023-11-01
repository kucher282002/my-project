let open_unification = document.querySelector('.open__unification');
let switch_register_unification = document.querySelector('.unification__account_response-register');
let switch_login_unification = document.querySelector('.unification__account_response-login');
let switch_restore_unification = document.querySelector('.unification__form_block-help');
let test = document.querySelector('.unification__account_response-restore');
let close_unification = document.querySelector('.unification__close');

open_unification.addEventListener('click', () => {
	document.querySelector('.unification__position-login').style.display = "flex";
	document.querySelector('.unification').style.display = "flex";
})

switch_register_unification.addEventListener('click', () => {
	document.querySelector('.unification__position-register').style.display = "flex";
	document.querySelector('.unification__position-login').style.display = "none";
})

switch_login_unification.addEventListener('click', () => {
	document.querySelector('.unification__position-register').style.display = "none";
	document.querySelector('.unification__position-login').style.display = "flex";
})

switch_restore_unification.addEventListener('click', () => {
	document.querySelector('.unification__position-restore').style.display = "flex";
	document.querySelector('.unification__position-login').style.display = "none";
})

test.addEventListener('click', () => {
	document.querySelector('.unification__position-restore').style.display = "none";
	document.querySelector('.unification__position-login').style.display = "flex";
})

close_unification.addEventListener('click', function (e) {
	this.parentNode.style.display = "none";
});


// function blockWrong() {
// 	document.querySelector('.unification_form_block-wrong').style.display = "flex";
	
// }
