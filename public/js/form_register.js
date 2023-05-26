let inputs = {
	'nameUser': returnDocumentElement('nameUser'),
	'subNameUser': returnDocumentElement('subnameUser'),
	'email': returnDocumentElement('email'),
	'cv': returnDocumentElement('cv'),
	'bio': returnDocumentElement('bio'),
	'password': returnDocumentElement('password'),
	'passwordValidation': returnDocumentElement('passwordValidation'),
	'buttonShowPassword': returnDocumentElement('buttonShowPassword'),
	'buttonShowPasswordValidation': returnDocumentElement('buttonShowPasswordValidation'),
	'nextForm': returnDocumentElement('nextForm'),
	'submitData': returnDocumentElement('submitData'),
}

let dataSubmitConfirmed = {
	'nameUser': false,
	'subNameUser': false,
	'email': false,
	'password': false,
	'passwordValidation': false,
	'cv': false,
	'bio': false
}

let keysInputs = ['nameUser', 'subNameUser', 'email', 'cv', 'bio']
let errorsElement = ['errorNameUser', 'errorSubnameUser', 'errorEmail', 'errorCV', 'errorBio']

keysInputs.forEach((key, index) => {
	addHandleToInputForError(inputs, key, errorsElement[index], dataSubmitConfirmed)
})

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
})

inputs['buttonShowPasswordValidation'].addEventListener('click', (e)=>{
	e.preventDefault()
	if (inputs['passwordValidation'].type == 'password'){
		inputs['passwordValidation'].setAttribute('type', 'text')
		inputs['buttonShowPasswordValidation'].textContent = 'Ocultar'
	}
	else{
		inputs['passwordValidation'].setAttribute('type', 'password')
		inputs['buttonShowPasswordValidation'].textContent = 'Mostrar'
	}
})

inputs['password'].onblur = ()=>{
	if (inputs['password'].value == 0) {
		showErrorPersonalized('errorPassword', 'Campo obligatorio')
		dataSubmitConfirmed['password'] = false
	}
}

inputs['password'].onkeyup = ()=>{
	if (inputs['password'].value.length < 8) {
		showErrorPersonalized('errorPassword', 'La constraseña debe tener al menos 8 caracteres')
		dataSubmitConfirmed['password'] = false
	}else{
		hideErrorPersonalized('errorPassword')
		dataSubmitConfirmed['password'] = true
	}
}

inputs['passwordValidation'].onblur = ()=>{
	if (inputs['passwordValidation'].value == 0) {
		showErrorPersonalized('errorPasswordValidation', 'Campo obligatorio')
		dataSubmitConfirmed['passwordValidation'] = false
	}
}

inputs['passwordValidation'].onkeyup = ()=>{
	if (inputs['passwordValidation'].value != inputs['password'].value) {
		showErrorPersonalized('errorPasswordValidation', 'La constraseña deben ser iguales')
		dataSubmitConfirmed['passwordValidation'] = false
	}else{
		hideErrorPersonalized('errorPasswordValidation')
		dataSubmitConfirmed['passwordValidation'] = true
	}
}

inputs['submitData'].addEventListener('click', (e)=>{
	if( (dataSubmitConfirmed['nameUser'] &&  dataSubmitConfirmed['subNameUser'] 
		&& dataSubmitConfirmed['email'] && dataSubmitConfirmed['password'] && dataSubmitConfirmed['password']
		&& dataSubmitConfirmed['cv'] &&  dataSubmitConfirmed['bio']) == false ){
		e.preventDefault();
		keysInputs.forEach((key, index) => {
			verifySubmit(inputs, key, errorsElement[index], dataSubmitConfirmed)
		})
		showErrorPersonalized('errorPassword', 'Campo obligatorio')
		showErrorPersonalized('errorPasswordValidation', 'Campo obligatorio')
		alert("Debe rellenar todos los campos");
	}
		  
});