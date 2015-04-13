<?php

/**
 * Class PortfolioPage
 */
class PortfolioPage extends Page
{
    private static $singular_name = "[Portfolio] Page";

    private static $plural_name = "[Portfolio] Pages";

    private static $description = "Generic content page type";

    private static $icon = 'portfolio-core/images/icons/sitetree_images/page.png';

    private static $db = array(
        'MakeButton' => 'Boolean(1)'
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab('Root.Main', array(
            CheckboxField::create('MakeButton', 'Display link to this page as a button?')
        ), "Content");
        return $fields;
    }
}

/**
 * Class PortfolioPage_Controller
 */
class PortfolioPage_Controller extends Page_Controller
{

    /**
     * All you should need to do with this function is add the additional stylesheets.
     */
    public function init()
    {
        parent::init();

        Requirements::block(THIRDPARTY_DIR . '/jquery/jquery.js');
        Requirements::block(THIRDPARTY_DIR . '/jquery-ui/jquery-ui.js');
        Requirements::combine_files('scripts.js', $this->getBaseScripts());

        $styles = $this->getBaseStyles();
        Requirements::combine_files('styles.css', $styles['all']);
        Requirements::set_combined_files_folder(ASSETS_DIR . '/_combinedfiles/portfolio-' . SSViewer::current_theme());
    }

    /**
     * Overwrites from BasePage
     *
     * @return array
     */
    protected function getBaseScripts()
    {
        $themeDir = SSViewer::get_theme_folder();

        $js_array = array(
            "$themeDir/js/lib/jquery.min.js",
            "$themeDir/js/lib/jquery.slicknav.js",
            "$themeDir/js/functions.js",
        );

        return $js_array;
    }

    /**
     * Overwrites from BasePage
     *
     * @return array
     */
    protected function getBaseStyles()
    {
        $themeDir = SSViewer::get_theme_folder();

        return array(
            'all'    => array(
                "$themeDir/css/style.css",
            ),
            'screen' => array(
                'screen.css'
            ),
            'print'  => array(
                'print.css'
            )
        );
    }
}