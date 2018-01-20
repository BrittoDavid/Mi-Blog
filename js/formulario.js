var inputs = document.getElementsByClassName('formulario__input');
for (var i = 0; i < inputs.length; i++) {
	inputs[i].addEventListener('keyup',function(){
		if (this.value.length>=1) {
			this.nextElementSibling.classList.add('fijar');
		}else{
			this.nextElementSibling.classList.remove('fijar');
		}
	});
}


var label = document.getElementsByClassName('input_1');
for (var i = 0; i < label.length; i++) {
	label[i].addEventListener('keyup',function(){
		if (this.value.length>=1) {
			this.nextElementSibling.classList.add('letras');
		}else{
			this.nextElementSibling.classList.remove('letras');
		}
	});
}