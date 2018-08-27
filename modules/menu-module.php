<?php
	include "cust-list.php";

	if($page_name == "home" || $page_name == "")
	{

        $menu = new CustomMenu("");
        ?>

        <?php
        $menu->AddItem("<div class='container'>
                                <img class='dim hvr-grow' src='./images/revisal-service.png'>
                                <div class='centered'>Servicii REVISAL</div>
                                </div>", "./?page=revisal-maintenance");
        $menu->AddItem("<div class='container'>
                                <img class='dim hvr-grow' src='./images/it-services.jpg'>
                                <div class='centered'>Servicii IT</div>
                                </div>", "./?page=it-services");
        $menu->AddItem("<div class='container'>
                                <img class='dim hvr-grow' src='./images/web-design.png'>
                                <div class='centered'>Site design</div>
                                </div>", "./?page=site-design");

        foreach($menu->GetList() as $item)
        {
            ?>
            <?= $item?>
            <?php
        }
    }

?>