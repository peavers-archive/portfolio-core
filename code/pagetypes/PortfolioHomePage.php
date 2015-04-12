<?php

/**
 * Class PortfolioHomePage
 */
class PortfolioHomePage extends PortfolioPage
{
    private static $singular_name = "[Portfolio] Home page";

    private static $plural_name = "[Portfolio] Home page";

    private static $description = "Homepage";

    private static $can_be_root = true;

    private static $allowed_children = array();

    private static $icon = 'portfolio-core/images/icons/sitetree_images/home.png';

    private static $db = array(
        'PrimaryMessage'     => 'HTMLText',
        'PrimaryLeftColumn'  => 'HTMLText',
        'PrimaryRightColumn' => 'HTMLText',
        'ProjectName'        => 'Varchar',
        'ProjectLeftColumn'  => 'HTMLText',
        'ProjectRightColumn' => 'HTMLText',
        'ProjectButtonInfo'  => 'HTMLText',
    );

    private static $has_one = array(
        "ProjectImage"         => "Image",
        'EnterpriseHolderLink' => 'SiteTree',
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Intro', array(
            HtmlEditorField::create("PrimaryMessage", "Primary message")->setRows(2),
            HtmlEditorField::create("PrimaryLeftColumn", "Left column")->setRows(2),
            HtmlEditorField::create("PrimaryRightColumn", "Right column")->setRows(2),
        ));

        $fields->addFieldsToTab('Root.LatestProject', array(

            UploadField::create('ProjectImage', "Cover image"),

            TextField::create('ProjectName', "Project name/title"),
            TreeDropdownField::create("EnterpriseHolderLinkID", "Link to enterprise project holder", 'SiteTree'),

            HtmlEditorField::create("ProjectLeftColumn", "Left column")->setRows(2),
            HtmlEditorField::create("ProjectRightColumn", "Right column")->setRows(2),
            HtmlEditorField::create("ProjectButtonInfo", "Bottom column")->setRows(2),

        ));

        $fields->removeByName('Metadata');
        $fields->removeByName('Content');

        return $fields;
    }
}

/**
 * Class PortfolioHomePage_Controller
 */
class PortfolioHomePage_Controller extends PortfolioPage_Controller
{
    public function init()
    {
        parent::init();
    }


}
