<?php

/**
 * Class PortfolioEnterprise
 */
class PortfolioEnterprise extends PortfolioPage
{
    private static $singular_name = "[Portfolio] Enterprise project";

    private static $plural_name = "[Portfolio] Enterprise projects";

    private static $description = "Projects completed for current employer";

    private static $can_be_root = false;

    private static $allowed_children = array();

}

/**
 * Class PortfolioEnterprise_Controller
 */
class PortfolioEnterprise_Controller extends PortfolioPage_Controller
{

}