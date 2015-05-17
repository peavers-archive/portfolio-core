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
        'GitHubRepository'  => 'Text',
        'Description'       => 'Text',
        'LanguageType' => 'Varchar'
    );

    private static $has_one = array(
        'Logo'   => 'Image',
        'Screen' => 'Image',
    );

    private static $has_many = array(
        'PortfolioCommunityFeature' => 'PortfolioCommunityFeature'
    );

    private static $many_many = array(
        'PortfolioLanguageTag' => 'PortfolioLanguageTag',
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', array(
            CheckboxField::create('DisplayOnHomepage', 'Display this on the homepage'),
            TextField::create("GitHubRepository", "Link to repository"),
            TextareaField::create("Description", "Short description shown on homepage"),
            UploadField::create("Logo", "Logo for project")->setFolderName('Uploads/Icons/'),
            UploadField::create("Screen", "Screen shot of project")->setFolderName('Uploads/Screenshots/'),
        ), "Content");

        $fields->addFieldsToTab("Root.Features", array(
                GridField::create('PortfolioCommunityFeature', 'Features of this release', $this->PortfolioCommunityFeature(), GridFieldConfig_RecordEditor::create()),
            )
        );

        $fields->addFieldsToTab("Root.LanguageTags", array(
                GridField::create('PortfolioLanguageTag', 'Language tag', $this->PortfolioLanguageTag(), GridFieldConfig_RelationEditor::create()),
            )
        );

        return $fields;
    }


    public function getTestTag()
    {

        $arrayList = new ArrayList();

        foreach ($this->PortfolioLanguageTag() as $object) {
            $arrayList->add($object);
        }

        return $arrayList;

    }

}

/**
 * Class PortfolioCommunity_Controller
 */
class PortfolioCommunity_Controller extends PortfolioPage_Controller
{
    public function init()
    {
        parent::init();
    }

    public function getTestTag()
    {
        return "Hello";
    }

}
