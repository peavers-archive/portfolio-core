<?php

/**
 * Class PortfolioContactForm
 */
class PortfolioContactForm extends PortfolioPage
{
    private static $singular_name = "[Portfolio] Contact page";

    private static $plural_name = "[Portfolio] Contact pages";

    private static $description = "Basic contact form";

    private static $icon = 'portfolio-core/images/icons/sitetree_images/page.png';

}

/**
 * Class PortfolioContactForm_Controller
 */
class PortfolioContactForm_Controller extends PortfolioPage_Controller
{
    public static $allowed_actions = array(
        'contactForm',
        'submitForm',
    );

    public function init()
    {
        parent::init();
    }

    public function contactForm()
    {
        return Form::create($this, 'contactForm',

            FieldList::create(
                TextField::create('Name', 'Who are you?'),
                TextField::create('EmailAddress', 'How should I respond to you?'),
                TextField::create('Subject', 'What is this about?'),
                TextareaField::create('Enquiry', 'Go for it!')
            ),

            FieldList::create(
                FormAction::create('submitForm', "Submit")
            ),
            RequiredFields::create('Name', 'Subject', 'Enquiry')
        );
    }

    public function submitForm()
    {
        Session::set('ActionStatus', 'success');
        Session::set('ActionMessage', "Thank you for your message, I will be in touch!");

        $this->redirectBack();
    }

}