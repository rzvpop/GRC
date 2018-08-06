<?php
	include "cust-list.php";

	if($page_name == "home" || $page_name == "")
	{

        $menu = new CustomMenu("");
		
       // $menu->AddItem("<img class='hvr-grow dim". (($page_name == "home")?" glowing-border":"") ."' src='imagini/home.jpg'>", "./?page=home");
        $menu->AddItem("<img class='dim hvr-grow' src='./images/revisal-maintenance.jpg'>", "./?page=revisal-maintenance");
        $menu->AddItem("<img class='dim hvr-grow' src='./images/it-services.jpg'>", "./?page=it-services");
        $menu->AddItem("<img class='dim hvr-grow' src='./images/site-design.jpg'>", "./?page=site-design");

        foreach($menu->GetList() as $item)
        {
            ?>
            <?= $item?>
            <?php
        }
    }

?>