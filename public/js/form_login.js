let inputs = {
	'email': returnDocumentElement('email'),
	'password': returnDocumentElement('password'),
	'submitData': returnDocumentElement('submitData'),
	'buttonShowPassword': returnDocumentElement('buttonShowPassword'),
	'token': returnDocumentElement('token'),
}

let email = {
	'email': returnDocumentElement('email'),
}

let dataSubmitConfirmed = {
	'email': false,
	'password': false,
}

let keysInputs = ['email']
let errorsElement = ['errorEmail']

addHandleToInputForError(inputs, 'email', 'errorEmail', dataSubmitConfirmed)
addHandleToInputForError(inputs, 'password', 'errorPassword', dataSubmitConfirmed)

inputs['buttonShowPassword'].addEventListener('click', (e)=>{
	e.preventDefault()
	if (inputs['password'].type == 'password'){
		inputs['password'].setAttribute('type', 'text')
		inputs['buttonShowPassword'].textContent = 'Ocultar'
	}
	else{
		inputs['password'].setAttribute('type', 'password')
		inputs['buttonShowPassword'].textContent = 'Mostrar'
	}
});

inputs['submitData'].addEventListener('click', (e) =>{
	if( (dataSubmitConfirmed['email'] && dataSubmitConfirmed['password']) == false){
		e.preventDefault();
		verifySubmit(email, keysInputs, errorsElement, dataSubmitConfirmed);
		showErrors('errorPassword', 'Campo obligatorio');
		alert("Debe rellenar todos los campos");
	}
});