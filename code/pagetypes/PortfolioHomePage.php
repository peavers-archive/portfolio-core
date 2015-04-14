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
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Intro', array(
            HtmlEditorField::create("PrimaryMessage", "Primary message")->setRows(2)->setDescription("This should be set as an H1 tag via the editor"),
            HtmlEditorField::create("PrimaryLeftColumn", "Left column")->setRows(2),
            HtmlEditorField::create("PrimaryRightColumn", "Right column")->setRows(2),
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
