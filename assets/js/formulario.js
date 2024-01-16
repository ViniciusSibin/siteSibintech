let usernameRef = document.getElementById("nome_completo");
let emailRef = document.getElementById("email");
let phoneNumberRef = document.getElementById("celular");
let submitBtn = document.getElementById("submit");

let isUsernameValid = () => {
/* Username should be contain more than 3 characters. Should begin with alphabetic character  Can contain numbers */
const usernameRegex = /^[a-zA-Z][a-zA-Z0-9]{3,32}/gi;
return usernameRegex.test(usernameRef.value);
};

let isEmailValid = () => {
/* Email should be in a valid format */
const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
return emailRegex.test(emailRef.value);
};

let isPhoneNumberValid = () => {
/* Phone number should be in a valid format */
const phoneRegex = /^[0-9]{10}$/;
return phoneRegex.test(phoneNumberRef.value);
};

usernameRef.addEventListener("input", () => {
	if (!isUsernameValid()) {
		messageRef.style.visibility = "hidden";
		usernameRef.style.cssText = "border-color: #fe2e2e; background-color: #ffc2c2";
	} else {
		usernameRef.style.cssText = "border-color: #34bd34; background-color: #c2ffc2";
	}
});
emailRef.addEventListener("input", () => {
	if (!isEmailValid()) {
		messageRef.style.visibility = "hidden";
		emailRef.style.cssText = "border-color: #fe2e2e; background-color: #ffc2c2";
	} else {
		emailRef.style.cssText = "border-color: #34bd34; background-color: #c2ffc2";
	}
});
phoneNumberRef.addEventListener("input", () => {
	if (!isPhoneNumberValid()) {
		messageRef.style.visibility = "hidden";
		phoneNumberRef.style.cssText = "border-color: #fe2e2e; background-color: #ffc2c2";
	} else {
		phoneNumberRef.style.cssText = "border-color: #34bd34; background-color: #c2ffc2";
	}
});


submitBtn.addEventListener("mouseover", () => {
//If either password or username is invalid then do this..
if (!isUsernameValid() || !isEmailValid() || !isPhoneNumberValid()) {
	//Get the current position of submit btn
	let containerRect = document.querySelector(".formulario_contato").getBoundingClientRect();
	let submitRect = submitBtn.getBoundingClientRect();
	let offset = submitRect.left - containerRect.left;
	console.log(offset);
	//If the button is on the left hand side.. move it to the the right hand side
	if (offset <= 100) {
	submitBtn.style.transform = "translateX(16.25em)";
	}
	//Vice versa
	else {
	submitBtn.style.transform = "translateX(0)";
	}
}
});