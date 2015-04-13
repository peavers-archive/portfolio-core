<?

class PortfolioContactForm extends PortfolioPage
{
    private static $singular_name = "[Portfolio] Contact page";

    private static $plural_name = "[Portfolio] Contact pages";

    private static $description = "Basic contact form";

    private static $icon = 'portfolio-core/images/icons/sitetree_images/page.png';
}

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
                TextField::create('Name', 'Name'),
                EmailField::create('EmailAddress', 'Your email address'),
                TextField::create('Subject', 'Subject'),
                TextareaField::create('Enquiry', 'Enquiry')
            ),

            FieldList::create(
                FormAction::create('submitForm', "Submit")
            ),
            null
//            RequiredFields::create('Name', 'EmailAddress', 'Subject', 'Enquiry')
        );
    }

    public function submitForm()
    {
        Session::set('ActionStatus', 'success');
        Session::set('ActionMessage', "Thank you for your message, I will be in touch!");

        $this->redirectBack();
    }

}