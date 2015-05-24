<?php

/**
 * Class PortfolioSiteConfig
 */
class PortfolioSiteConfig extends DataExtension
{
    private static $db = array(
        'BottomLine' => 'Varchar'
    );

    private static $has_many = array(
        "PortfolioFooterLinks" => "PortfolioFooterLinks"
    );

    private static $has_one = array(
        "ProfileImage" => "Image"
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab('Root.Main', array(
            UploadField::create("ProfileImage", "Profile image/logo"),
        ));

        $fields->addFieldsToTab('Root.FooterLinks', array(
            GridField::create('PortfolioFooterLinks', 'Links in the footer', $this->owner->PortfolioFooterLinks(), GridFieldConfig_RecordEditor::create()),
            TextField::create('BottomLine', 'Bottom line of the footer'),
        ));
    }
}
