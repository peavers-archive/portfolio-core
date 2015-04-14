<?php

/**
 * Class PortfolioFooterLinks
 */
class PortfolioFooterLinks extends DataObject
{
    private static $db = array(
        'Title'       => 'Varchar',
        'Icon'        => 'Varchar',
        'LinkAddress' => 'Varchar',
        'Type'        => 'Varchar',
        'LinkType' => 'Varchar',
    );

    private static $has_one = array(
        'PortfolioSiteConfig' => 'SiteConfig'
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab("Root.Main", array(

                TextField::Create("Title", "Label"),

                TextField::Create("LinkAddress", "Link")
                    ->setDescription("Can be email address, internal/external url or phone number"),

                FontAwesomeField::create("Icon"),

                OptionsetField::create('Type', 'Link type')
                    ->setSource(array(
                        'Internal'     => 'To another page on this site',
                        'External'     => 'To another page on the internet',
                        'PhoneNumber'  => 'Phone/Skype number',
                        'EmailAddress' => 'Email address',
                    )),
                HiddenField::create("LinkType", "LinkType"),
            )
        );

        $fields->removeByName('PortfolioSiteConfigID');

        return $fields;
    }

    /**
     * Prefix the link based on user selection
     */
    public function onBeforeWrite()
    {

        switch ($this->Type) {
            case 'PhoneNumber':
                $this->LinkType = "tel:";
                break;
            case 'EmailAddress':
                $this->LinkType = "mailto:";
                break;
            default:
                $this->LinkType = "";
        }

        parent::onBeforeWrite();
    }
}