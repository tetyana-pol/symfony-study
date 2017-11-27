$(document).ready(function()
{			$('#add').click(function()
	{
		$('#send').before('<div class="form-group input">');
		$('#send').before('<label for id="name_office">Назва офісу</label>');
		$('#send').before('<input type="text" name="name_office[]" id="name_office"/>');
		$('#send').before('<label for id="adress_office">Адреса офісу</label>');
		$('#send').before('<input type="text" name="adress_office[]" id="adress_office"/>');
		$('#send').before('<label for id="telefon">Телефон</telefon>');
		$('#send').before('<input type="text" name="telefon[]" id="telefon"/>');
		$('#send').before('<label for id="name_person">Відповідальна особа</label>');
		$('#send').before('<input type="text" name="name_person[]" id="name_person"/>');
		$('#send').before('</div>');
});
		$('#del').click(function(){
		
		$('#send').prev().remove();
			});
});