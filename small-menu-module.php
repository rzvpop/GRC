<?php

	include "cust-list.php";

	if($page_name != "home" && $page_name != "")
	{

        $menu = new CustomList("");
		
        $menu->AddItem("<span class='". (($page_name == "revisal-maintenance")?"current-":"") ."lnk'><a href='./?page=revisal-maintenance'>Revisal</a></span>");
        $menu->AddItem("<span class='". (($page_name == "it-services")?"current-":"") ."lnk'><a href='./?page=it-services'>IT Services</a></span>");
        $menu->AddItem("<span class='". (($page_name == "site-design")?"current-":"") ."lnk'><a href='./?page=site-design'>Website design</a></span>");

        foreach($menu->GetList() as $item)
        {
            ?>
            <?= $item?>
            <?php
        }
    }

?>