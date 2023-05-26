const returnDocumentElement = (idElement)=> document.getElementById(idElement)

const showErrors = (id)=> { returnDocumentElement(id).style.display = 'block' }
const hideErrors = (id)=> { returnDocumentElement(id).style.display = 'none' }
const showErrorPersonalized = (id, text)=> { returnDocumentElement(id).textContent = text }
const hideErrorPersonalized = (id)=> { returnDocumentElement(id).textContent = '' }


const addHandleToInputForError = function(elementsDOM, inputID, errorID, dataSubmit){
	elementsDOM[inputID].onblur = ()=>{
	if (elementsDOM[inputID].value.length == 0)
		showErrors(errorID)
	}

	elementsDOM[inputID].onkeyup = ()=>{
		if(elementsDOM[inputID].value.length > 1){
			hideErrors(errorID)
			dataSubmit[inputID] = true
		}else{
			showErrors(errorID)
			dataSubmit[inputID] = false
		}
		
	}
}

const verifySubmit = function(elementsDOM, inputID, errorID, dataSubmit){
	if (elementsDOM[inputID].value.length == 0)
		showErrors(errorID)

	if(elementsDOM[inputID].value.length > 1){
		hideErrors(errorID)
		dataSubmit[inputID] = true
	}else{
		showErrors(errorID)
		dataSubmit[inputID] = false
	}
}