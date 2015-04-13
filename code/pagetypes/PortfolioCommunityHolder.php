<?php

/**
 * Class PortfolioCommunityHolder
 */
class PortfolioCommunityHolder extends PortfolioPage
{
    private static $singular_name = "[Portfolio] Community holder";

    private static $plural_name = "[Portfolio] Community holders";

    private static $description = "Holder for Software released on github";

    private static $can_be_root = true;

    private static $allowed_children = array(
        "PortfolioCommunity"
    );

    private static $icon = 'portfolio-core/images/icons/sitetree_images/holder.png';

}

/**
 * Class PortfolioCommunityHolder_Controller
 */
class PortfolioCommunityHolder_Controller extends PortfolioPage_Controller
{

}