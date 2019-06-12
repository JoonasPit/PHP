# PHP
This repo contains a web-project written for my php class. The website was to have a functional database connection.
Other requriements included using sessions and user validation. 

## Basic structure
The user lands on the index.php site where they can then click on the required 'Log In' button which then directs them to the
log in page. The page takes in user input which it runs through a validation page. This redirect page will through the user back to the log in page with corresponding error messages next to the fields in which the provided info was not up to standards. E.g the e-mail address is not a valid e-mail address. Provided the user matches all requirements for all fields they are directed to a check-info page.
If they want to change info there is a button available to go back and edit info in the input fields. The course required us to have the info our user gave be written back into the fields. If everything is correct the user can choose to save the data in the database and then be redirected to a page that lists all the info on a new page.

## Listing page
The page on which user info is listed on provides a delete function but no update because it was not requred on the course.

## CSS
The css used in this is pretty basic with some google-fonts I found suitable for this faux-Bank this page was for.
