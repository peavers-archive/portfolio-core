<?php

/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 4/12/2015
 * Time: 10:11 AM
 */
class PortfolioCommunity extends PortfolioPage
{
    private static $singular_name = "[Portfolio] Community releases";

    private static $plural_name = "[Portfolio] Community releases";

    private static $description = "Software released on github";

    private static $can_be_root = false;

    private static $allowed_children = array();

    private static $db = array(
        'GitHubRepository' => 'Varchar',
        'Description'      => 'Text',
    );

    private static $has_one = array(
        'Screen' => 'Image'
    );

    private static $has_many = array(
        'PortfolioCommunityFeature' => 'PortfolioCommunityFeature'
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', array(
            TextField::create("GitHubRepository", "Link to github repository"),
            TextareaField::create("Description", "Short description shown on homepage"),
            UploadField::create("Screen", "Icon/Image of product"),
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