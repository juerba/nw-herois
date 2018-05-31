function validateCheckBox(form) {
  var tmp = false;
  for (var i in form.elements) {
  		var el = form.elements[i];
    	if (el.type == 'checkbox' && el.checked)tmp = true;
   }
   if (!tmp) alert('Selecione ao menos uma especialidade.');
   return tmp;
}