## Team Number 48 - T&P Info Page

The participants are required to fork this repository and create a public Github repository under their own username (Single repository per team). The following created sections in this README.md need to be duly filled, highlighting the denoted points for the solution/implementation. Please feel free to create further sub-sections in this markdown, the idea is to understand the gist of the components in a singular document.

### Project Overview
----------------------------------

A brief description of 
* What problem did the team try to solve
	The website is mainly focussed on fufilling all the requirements of the TRAINING AND PLACEMENT department in a college.
* What is the proposed solution
	The website contains all the information related to companies,divided in 3 parts :previous,upcoming and ongoing alongwith their description.There is a database which would be constantly updated by an admin(only he or she would have the access to the database) with the company names,the start and end date of their palcement drive in the college.


### Solution Description

The website has a homepage which contains the following tabs:
	1. HOME
	2. COMPANIES (conatins the description of all the companies)
	3. LOGIN(for admin login) 
	4. DROP-DOWN MENU (Containing Upcoming, Ongoing and Previous Companies)

After the admin has logged in,he or she would be taken to a page which has 3 buttons:
		1. Upcoming Companies 
		2. Ongoing Companies 
		3. Previous Companies 

On clicking a button say 'UPCOMING',the admin can update the 'UPCOMING COMPANIES' database.
	

#### Architecture Diagram

Affix an image of the flow diagram/architecture diagram of the solution

#### Technical Description

An overview of 
* What technologies/versions were used
	Text Editor - Sublime Text 3
	Backend - xampp
	
	1.html 
	2.css
	3.bootstrap
	4.php
	5.mySQL

* Setup/Installations required to run the solution
	1.XAMPP
	2.CHROME browser

* Instructions to run the submitted code
	- The code folder (i.e. within "Application Code" folder) must be placed in the "htdocs" folder with "xampp" folder
	- To load the "home" page use "localhost/code/home.html" 
	- 4 Databases must be created in order to use the login and database features:
		1. for login page containg two attributes
			database name - record
			table name - user 
				- email
				- password
		2. for Ongoing Companies | Upcoming Companies | Prevoius Companies Entry Form
			database name - ongoing | upcoming | previous
			table name - companies
				- c_id
				- start_date
				- end_date
				- company_name


### Team Members
	
List of team member names and email IDs with their contributions
	1.Ayushi Prasad | email - ayushiprasad850@gmail.com | contribution - Backend
	2.Ayushi | email - kayushi999@gmail.com | contribution - Frontend
	3.Swagat Panda | email - swagatp99@gmail.com | contribution - Fontend