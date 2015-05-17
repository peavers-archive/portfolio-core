<?php

/**
 * Class PortfolioTagAdmin
 */
class PortfolioTagAdmin extends ModelAdmin
{
    private static $managed_models = array(
        'PortfolioLanguageTag',
    );

    private static $url_segment = 'tags';

    private static $menu_title = 'Language Tags';
}