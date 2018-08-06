<?php

class CustomList
	{
		protected $type = "ul";
		protected $items = array();

		function CustomList($_type = "unodered")
		{
			if($_type == "ordered")
				$this->type = "ol";
			elseif($_type == "")
				$this->type = "";
		}

		function AddItem($item)
		{
			if($type != "")
				$item = "<li>{$item}</li>";
			array_push($this->items, $item);
		}
		
		function GetList()
		{
			return $this->items;
		}
		
		function GetType()
		{
			return $this->type;
		}
	}
	
class CustomMenu extends CustomList
{
	function CustomMenu($_type = "unordered")
	{
		CustomList::CustomList($_type);
	}
	
	function AddItem($item, $page_link)
	{
		$item = "<a href='{$page_link}'>{$item}</a>";
		CustomList::AddItem($item);
	}
}

?>