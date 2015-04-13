<?php

/**
 * Class PortfolioCommunity
 */
class PortfolioCommunity extends PortfolioPage
{
    private static $singular_name = "[Portfolio] Community releases";

    private static $plural_name = "[Portfolio] Community releases";

    private static $description = "Software released on github";

    private static $can_be_root = false;

    private static $allowed_children = array();

    private static $db = array(
        'DisplayOnHomepage' => 'Boolean(1)',
        'GitHubRepository'  => 'Varchar',
        'Description'       => 'Text',
    );

    private static $has_one = array(
        'Logo'   => 'Image',
        'Screen' => 'Image',
    );

    private static $has_many = array(
        'PortfolioCommunityFeature' => 'PortfolioCommunityFeature'
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', array(
            CheckboxField::create('DisplayOnHomepage', 'Display this on the homepage'),
            TextField::create("GitHubRepository", "Link to github repository"),
            TextareaField::create("Description", "Short description shown on homepage"),
            UploadField::create("Logo", "Logo for project"),
            UploadField::create("Screen", "Screen shot of project"),
        ), "Content");

        $fields->addFieldsToTab("Root.Features", array(
                GridField::create('PortfolioCommunityFeature', 'Features of this release', $this->PortfolioCommunityFeature(), GridFieldConfig_RecordEditor::create()),
            )
        );

        return $fields;
    }
}

class PortfolioCommunity_Controller extends PortfolioPage_Controller
{
    public function init()
    {
        parent::init();
    }
}