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
	'submitData': returnDocumentElement('submitData'),
}

let dataSubmitConfirmed = {
	'nameUser': true,
	'subNameUser': true,
	'email': true,
	'password': true,
	'passwordValidation': true,
	'cv': true,
	'bio': true
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
	if( (dataSubmitConfirmed['cv'] &&  dataSubmitConfirmed['bio']) == false {
		e.preventDefault()
		alert("Rellene todos los datos")
	}
})