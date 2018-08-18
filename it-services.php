<form type='POST' id='mail_form' action=''>
    <input type='text' name='nume' onkeypress='CheckMandatory();' onkeyup='CheckMandatory();' placeholder='Nume si prenume(obligatoriu)'>
	<input type='text' name='email' onkeypress='CheckMandatory();' onkeyup='CheckMandatory();' placeholder='Email(obligatoriu)'>
    <br><br>
    <input type='checkbox' name='' value=''>
    <br><br>
    <!--toate-->
    <textarea form='mail_form' name='additional' placeholder='Alte solicitari...'></textarea>
    <br>
    <div>
        <input type='submit' id='sub' style="width: 14vw" value='Inainteaza solicitarea' disabled='true'>
    </div>
</form>
