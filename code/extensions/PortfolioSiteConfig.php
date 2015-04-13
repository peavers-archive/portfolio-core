<?php

/**
 * Class BaseNameSiteConfig
 */
class PortfolioSiteConfig extends DataExtension
{
    private static $db = array();

    private static $has_many = array(
        "PortfolioFooterLinks" => "PortfolioFooterLinks"
    );

    private static $has_one = array(
        "ProfileImage" => "Image"
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab('Root.Main', array(
            UploadField::create("ProfileImage", "Icon/Image of product"),
        ));

        $fields->addFieldsToTab('Root.FooterLinks', array(
            GridField::create('PortfolioFooterLinks', 'Links in the footer', $this->owner->PortfolioFooterLinks(), GridFieldConfig_RecordEditor::create()),
        ));

    }
}