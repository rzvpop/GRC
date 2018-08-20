<?php
	function HTML_Escape($text)
	{
		return htmlentities($text, ENT_QUOTES, "UTF-8");
	}	
?>