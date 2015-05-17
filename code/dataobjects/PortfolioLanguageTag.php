<?php

/**
 * Class PortfolioLanguageTag
 */
class PortfolioLanguageTag extends DataObject
{
    private static $db = array(
        'Title' => 'Varchar(255)',
        'Label' => 'Varchar(255)',
    );

    private static $belongs_many_many = array(
        'PortfolioCommunity' => 'PortfolioCommunity'
    );

    public function onBeforeWrite()
    {

        $safeTitle = $this->Title;

        $safeTitle = urlencode($safeTitle);
        $safeTitle = strtolower($safeTitle);

        $this->Title = $safeTitle;

        parent::onBeforeWrite();
    }
}