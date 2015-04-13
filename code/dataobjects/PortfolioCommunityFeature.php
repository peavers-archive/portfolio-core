<?php

/**
 * Class PortfolioCommunityFeature
 */
class PortfolioCommunityFeature extends DataObject
{
    private static $db = array(
        'Title'   => 'Varchar',
        'Icon'    => 'Varchar',
        'Content' => 'HTMLText'
    );

    private static $has_one = array(
        'PortfolioCommunity' => 'PortfolioCommunity'
    );
}