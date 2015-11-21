var idInputVariants = 1;
function addNewVariant(){
	//alert('dfgdfg1');
	var form = document.getElementById('createNewVoiting');
	var divControlGroup = document.createElement('div');
	divControlGroup.className = 'control-group';
	var divControl = document.createElement('div');
	divControl.className = 'control';
	var h2 = document.createElement('h2');
	var input = document.createElement('input');
	var button = document.getElementById('lastDiv'); 
	input.type = 'text';
	input.id = 'inputEmail';
	input.name  = 'variant' + idInputVariants;
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
	divControlGroup.className = 'control-group';
	var divControl = document.createElement('div');
	divControl.className = 'control';
	var h2 = document.createElement('h2');
	var input = document.createElement('input');
	var button = document.getElementById('firstDiv'); 
	input.type = 'text';
	input.id = 'inputEmail';
	input.name = 'mail';
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
function saveCurentPage(){
	var form = document.getElementById('createNewVoiting');
	if(isPrivate(form)){
		if(isValidedEMail(form)){		
			form.action = '../php/SaveCurentPagePrivate.php';
			alert('dfghjkl');
		}else{
			return;
		}
	}
	form.submit();
	//var form = document.getElementById('createNewVoiting');
	      //var msg   = $('#createNewVoiting').serialize();
        //$.ajax({
          //type: 'POST',
          //url: '../php/SaveCurentPage.php',
          //data: msg,
          //success: function(data) {
            //$('.results').html(data);
          //},
          //error:  function(xhr, str){
            //    alert('Возникла ошибка: ' + xhr.responseCode);
            //}
        //});
}