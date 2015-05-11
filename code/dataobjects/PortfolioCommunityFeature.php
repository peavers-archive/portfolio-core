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

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', array(
            FAField::create("Icon", 'Font awesome icon'),
        ));

        return $fields;
    }

}
