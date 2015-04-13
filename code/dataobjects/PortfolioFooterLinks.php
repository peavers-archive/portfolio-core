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
        'Output'      => 'HTMLText',
    );

    private static $has_one = array(
        'PortfolioSiteConfig' => 'SiteConfig'
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab("Root.Main", array(

                OptionsetField::create('Type', 'Link type')
                    ->setSource(array(
                        'Internal'     => 'To another page on this site',
                        'External'     => 'To another page on the internet',
                        'PhoneNumber'  => 'Phone/Skype number',
                        'EmailAddress' => 'Email address',
                    )),

                HiddenField::create("Output", "Output"),

            )
        );

        $fields->removeByName('PortfolioSiteConfigID');

        return $fields;
    }

    public function onBeforeWrite()
    {

        $icon = '<i class="fa fa-' . $this->Icon . '"></i>';

        switch ($this->Type) {
            case 'Internal':
                $this->Output = $icon . '<a href="' . $this->LinkAddress . '">' . $this->Title . '</a>';
                break;
            case 'External':
                $this->Output = $icon . '<a href="' . $this->LinkAddress . '">' . $this->Title . '</a>';
                break;
            case 'PhoneNumber':
                $this->Output = $icon . '<a href="tel:' . $this->LinkAddress . '">' . $this->Title . '</a>';
                break;
            case 'EmailAddress':
                $this->Output = $icon . '<a href="mailto:' . $this->LinkAddress . '">' . $this->Title . '</a>';
                break;
            default:
                $this->Output = "Error!";
        }

        parent::onBeforeWrite();
    }

}