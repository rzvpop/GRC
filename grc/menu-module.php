<?php
	include "cust-list.php";
	$page_name = $_GET["page"];
	if($page_name=="home" || $page_name ==""){

        $menu = new CustomMenu("");
        $menu->AddItem("<img class='dim". (($page_name == "home")?" glowing-border":"") ."' src='imagini/home.jpg'>", "./?page=home");
        $menu->AddItem("<img class='dim". (($page_name == "revisal-maintenance")?" glowing-border":"") ."' src='imagini/revisal-maintenance.jpg'>", "./?page=revisal-maintenance");
        $menu->AddItem("<img class='dim". (($page_name == "it-services")?" glowing-border":"") ."' src='imagini/it-services.jpg'>", "./?page=it-services");
        $menu->AddItem("<img class='dim". (($page_name == "site-design")?" glowing-border":"") ."' src='imagini/site-design.jpg'>", "./?page=site-design");

        foreach($menu->GetList() as $item)
        {
            ?>
            <?= $item?>
            <?php
        }
    }

?>