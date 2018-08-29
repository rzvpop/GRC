<div style="margin: 5px">
<form method='POST' id='mail_form' action='send-mail.php/?subject=site'>
	<input type='text' name='nume' onkeypress='CheckMandatory();' onkeyup='CheckMandatory();' placeholder='Nume si prenume(obligatoriu)'>
	<input type='text' name='email' onkeypress='CheckMandatory();' onkeyup='CheckMandatory();' placeholder='Email(obligatoriu)'>
	<br><br>
	<textarea name='additional' form='mail_form' placeholder='Scurta descriere si cerinte...'></textarea>
	<br>
    <button type='submit' id='sub' disabled><span class="glyphicon glyphicon-send"></span>  Inainteaza solicitarea  </button></form>
</div>