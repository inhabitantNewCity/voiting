var idInputVariants = 3;
function addNewVariant(){
	//alert('dfgdfg1');
	var form = document.getElementById('createNewVoiting');
	var divControlGroup = document.createElement('div');
	//divControlGroup.class = "control-group has-feedback"
	divControlGroup.className = 'control-group has-feedback';
	var divControl = document.createElement('div');
	divControl.className = 'control';
	var h2 = document.createElement('h2');
	var input = document.createElement('input');
	var button = document.getElementById('lastDiv'); 
	input.type = 'text';
	input.id = 'inputEmail';
	input.name  = 'variant' + idInputVariants;
	input.className = 'form-control';
	input.required = "required";
	input.pattern = '/[A-Za-z0-9]{6,40}/i';
	idInputVariants++;
	//alert(input.name);
	input.placeholder = 'add variant';

	h2.appendChild(input);
	divControl.appendChild(h2);
	divControlGroup.appendChild(divControl);
	form.insertBefore(divControlGroup, button);
}
function setPrivate(){
	if (document.getElementById('privateId') != null) {
		return;
	};
	var form = document.getElementById('createNewVoiting');
	//form.action = '../php/SaveCurentPagePrivate.php';
	var divControlGroup = document.createElement('div');
	divControlGroup.className = 'control-group has-feedback' ;
	var divControl = document.createElement('div');
	divControl.className = 'control';
	var h2 = document.createElement('h2');
	var input = document.createElement('input');
	var button = document.getElementById('firstDiv'); 
	input.type = 'text';
	input.id = 'inputEmail';
	input.name = 'mail';
	input.className = 'form-control';
	input.required = "required";
	input.pattern = '/[0-9a-z_]+@[0-9a-z_]+\.[a-z]{2,5}/i';
	//class="form-control" required="required"pattern="[A-Za-z0-9]{6,40}"
	//input.onkeyup = 'isValidedEMail(form)';
	input.placeholder = 'eMail';
	var h2Title = document.createElement('h2');
	h2Title.innerHTML = 'E-mail';
	var label = document.createElement('label');
	label.id = "privateId";
	label.appendChild(h2Title);
	label.className = 'control-label';
	label.for = 'inputEmail';


	h2.appendChild(input);
	divControl.appendChild(h2);
	divControlGroup.appendChild(label);
	divControlGroup.appendChild(divControl);
	form.insertBefore(divControlGroup, button);	
}
function isPrivate(form){
	if (document.getElementById('privateId') != null) {
		return true;
	}
	return false;
}
function CorectEMail(ob){
	//var input = document.getElementById('inputEmail');
	//var h2  = input.getElementByTagName('');
	ob.style.color = ''; 
}
function unCorectEMail(ob){
	//var input = document.getElementById('inputEmail');
	//var h2  = input.getElementByTagName('');
	ob.style.color = 'rgb(225,0,0)'; 
}
function isValidedEMail(form){
		var eMail = form.mail;
		//alert(eMail);
		var eMailpattern = /[0-9a-z_]+@[0-9a-z_]+\.[a-z]{2,5}/i;
		var boolEMail = eMailpattern.test(eMail);
		if(boolEMail){		
			return true;
			CorectEMail(eMail);
		}else{
			unCorectEMail(eMail);
			return false;
		}
}
function isValidedOtherInput(form){
	var ePattern = /[0-9a-z_]{1,50}/i;
	//alert('	sdfghjg');
	//var bool = ePattern.test(eMail);
	for(var i = 0; i < form.elements.length; i++){
		var e = form.elements[i];
		if(e != form.mail);
		{
			//alert(e);

			if(ePattern.test(e.value)){
				//alert('	sdfghjg');
				return true;
				
			}
			else{
				//alert('	sdfghjg2');
				return false;
				
			}
		}
	}
}
function saveCurentPage(){
	var form = document.getElementById('createNewVoiting');
	if(isPrivate(form)){
		if(isValidedEMail(form)){		
			form.action = '../php/SaveCurentPagePrivate.php';
			//alert('dfghjkl');
		}else{
			return;
		}
	}
	if(!isValidedOtherInput(form)){
		return;
	}
	form.submit();
}