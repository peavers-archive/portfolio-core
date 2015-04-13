<?php

/**
 * Class PortfolioEnterpriseHolder
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

/**
 * Class PortfolioEnterpriseHolder_Controller
 */
class PortfolioEnterpriseHolder_Controller extends PortfolioPage_Controller
{

}