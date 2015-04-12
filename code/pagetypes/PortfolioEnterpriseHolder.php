<?php

/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 4/12/2015
 * Time: 10:17 AM
 */
class PortfolioEnterpriseHolder extends PortfolioPage
{
    private static $singular_name = "[Portfolio] Enterprise holder";

    private static $plural_name = "[Portfolio] Enterprise holders";

    private static $description = "Holder for projects completed for current employer";

    private static $can_be_root = true;

    private static $allowed_children = array(
        "PortfolioEnterprise"
    );

    private static $icon = 'portfolio-core/images/icons/sitetree_images/holder.png';

}

class PortfolioEnterpriseHolder_Controller extends PortfolioPage_Controller
{

}