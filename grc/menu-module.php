<?php
	include "cust-list.php";

	if($page_name=="home" || $page_name ==""){

        $menu = new CustomMenu("");
        $menu->AddItem("<img class='hvr-grow dim". (($page_name == "home")?" glowing-border":"") ."' src='imagini/home.jpg'>", "./?page=home");
        $menu->AddItem("<img class='hvr-grow dim". (($page_name == "revisal-maintenance")?" glowing-border":"") ."' src='imagini/revisal-maintenance.jpg'>", "./?page=revisal-maintenance");
        $menu->AddItem("<img class='hvr-grow dim". (($page_name == "it-services")?" glowing-border":"") ."' src='imagini/it-services.jpg'>", "./?page=it-services");
        $menu->AddItem("<img class='hvr-grow dim". (($page_name == "site-design")?" glowing-border":"") ."' src='imagini/site-design.jpg'>", "./?page=site-design");
        ?>
        <div align="center">
        <?php
        foreach($menu->GetList() as $item)
        {
            ?>
            <?=$item?>

            <?php
        }
        ?>
        </div>
        <?php
    }
    else {

	}
?>