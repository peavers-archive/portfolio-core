<?php

/**
 * Class ${NAME}
 * @package: portfolio-core
 */
class PortfolioCommunityFeature extends DataObject
{
    private static $db = array(
        'Icon'    => 'Varchar',
        'Content' => 'HTMLText'
    );

    private static $has_one = array(
        'PortfolioCommunity' => 'PortfolioCommunity'
    );
}