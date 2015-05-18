## Synopsis
Backend for Portfolio build.

## Requires
[Portfolio Theme] (https://github.com/peavers/portfolio-theme)
[Font-Awesome module] (https://github.com/peavers/silverstripe-font-awesome)

## Recommended
[Google Analytics module] (https://github.com/peavers/silverstripe-google-analytics)

## Features
* Completely customizable from the CMS
* Independent of other changes you have made to Silverstripe. Works well as a subsite.

## Note
Currently in active development and not recommended to be used

## Page types
### Portfolio Homepage
This is the standard homepage of the site. It includes a tab named "Introduction" which includes three WYSIWYG boxes
##### Primary message
Should be used for your main "attention grabbing" message. Make sure you set this text to an H1 element for effect
##### Left column
Displays under the primary message to the left
##### Right column
Displays under the primary message to the left

### Portfolio Page
A standard/generic page type that will make up most of your site. It includes all the default Silverstripe fields. 
##### Display link to this page as a button?
Under the page settings there is a checkbox to set an extra class on this page which will style it to look like a 
button. This is great for effect on an important page.

### Portfolio ContactForm
Standard contact form, should be modified by your developer to alter fields

### Portfolio CommunityHolder
This holds all community based projects. Only community pages may be placed as children to this holder. Standard 
Silverstripe fields apply

### Portfolio Community
Each project you decide to open-source fits into this page type. 
##### Display this on the homepage
To show as one of the three column boxes on the homepage
##### Link to repository
Provide a link to where the code is hosted
##### Short Description shown on the homepage
This makes up the text shown. Should be one or two lines - A very quick "First glance".
##### Logo for project
Is shown on the homepage is the icon for the project
##### Screen shot of project
A high quality image that is displayed when the user clicks into the project for further details. 
##### Features
Each project is made up of features, you can create one dataobject per feature and an unlimited number of features is
allowed. I personally wouldn't create more than three or four. A feature has a title, a font-awesome icon, and a 
short description

### Portfolio EnterpriseHolder
Another holder/container page type. Enterprise is the name given to close-sourced projects. Things that you have 
worked on in the office that can't share low level details or code base due to privacy/terms of employment etc.

### Portfolio Enterprise
Includes standard page template/fields with the addition of Homepage Deatils
##### Homepage Details
A selector to choose which project to display on the homepage. Only one may be displayed at a time. The rest of the 
field values are self explanatory.

