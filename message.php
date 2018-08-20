<?php
	class Message
	{
		protected $type = "";
		protected $text = "";
		private $types = array("success", "warning", "fail", "information"); 
		
		function Message($_text = "", $_type = "")
		{
			$this->text = $_text;
			
			if(array_search($_type, $this->types) !== false)
			{
				$this->type = $_type;
			}
		}
		
		function SetType($_type = "")
		{
			if(array_search($_type, $this->types) !== false)
			{
				$this->type = $_type;
			}
		}
		
		function SetText($_text = "")
		{
			$this->text = $_text;
		}
		
		function Display()
		{
			echo "<div class='" . $this->type . "'>";
			echo "<span class='close-alert-btn' onclick='this.parentElement.style.display='none';'>&times;</span>";
			echo $this->text;
			echo "</div>";
		}
	}


?>