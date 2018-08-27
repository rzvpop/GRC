<div style="margin: 5px">
<form type='POST' id='mail_form' action=''>
	<input type='text' name='nume' onkeypress='CheckMandatory();' onkeyup='CheckMandatory();' placeholder='Nume si prenume(obligatoriu)'>
	<input type='text' name='email' onkeypress='CheckMandatory();' onkeyup='CheckMandatory();' placeholder='Email(obligatoriu)'>
	<br><br>
	<input type='checkbox' name='' value='Servicii de pastrare si completare Revisal'>
	<br><br>
	<!--toate-->
	<textarea form='mail_form' name='additional' placeholder='Alte solicitari...'></textarea>
	<br>
    </span><input type='submit' style="width: 14vw" id='sub' value='Inainteaza solicitarea' disabled='true'>

</form>
</div>