function CheckMandatory()
{
	var name = document.getElementsByName("nume")[0].value;
	var email = document.getElementsByName("email")[0].value;
		
	if(name.length >= 3 && email.length >= 9 && email.search("@") != -1)
	{
		document.getElementById('sub').disabled = false;
	}
	else
	{
		document.getElementById('sub').disabled = true;
	}
}