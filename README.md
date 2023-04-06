# WEB APPLICATION SECURITY (WAS)



**NUR ALIA BINTI MUHAMMAD 2010884<br>**
*LECTURER : DR. MUHAMAD SADRY ABU SEMAN*
 

## Assignment 1 : Regex Function

## StudentDetails.PHP
This folder contains the coding for a client-server application designed to register student details using an HTML form. The form includes fields for the student's name, matric number, current address, home address, email address, phone number, and emergency home number. Each input field is designed to ensure the security and integrity of the data being submitted, with measures in place to prevent data breaches and SQL injection attacks.

To ensure the accuracy and completeness of the data being submitted, each input field has its own specific requirements that the user must adhere to. For example, the email address field requires a valid email address format, while the phone number field may require a specific format, 10 digit numbers only. By enforcing these requirements, the application is able to collect high-quality data that can be used for a variety of purposes, such as student record-keeping.

## Style.css
This folder contains CSS scripts that have been specifically designed for the Studentdetails.php page. The goal of these scripts is to create a design that is in line with the requirements provided by Dr. The CSS scripts aim to replicate the design that has been provided, ensuring that all of the elements on the page are properly aligned, appropriately sized, and visually appealing by following these design requirements.

## Process.PHP
This folder contains PHP code that has been designed for server-side scripting purposes. The PHP code has been developed with an aim to strengthen the security measures by including additional sanitizing and filtering functionalities. The code also includes several regular expression (regex) patterns to ensure that the data entered by users meets the required input format. These additional security measures and filtering functionalities are crucial to prevent potential security breaches and data manipulation by malicious actors. The PHP code may also include error handling mechanisms to ensure that any errors or issues that may arise during the data submission process are dealt with appropriately. In addition to the security and filtering functionalities, the PHP code in this folder includes HTML code that is responsible for displaying the information input by the user. This HTML code is designed to be user-friendly and visually appealing, making it easy for users to review the information they have entered.

## Stylesubmit.css
The stylesubmit.css file in this folder has been created to design the HTML elements present in the process.php file. The purpose of this CSS file is to ensure that the HTML elements in the process.php file are visually appealing, user-friendly, and consistent with the design of the overall application. The stylesubmit.css file may include various design elements such as font types, font sizes, color schemes, background images, and spacing between elements. These design elements are carefully chosen to ensure that the overall design is cohesive and visually appealing.


## Assignment 2 : Authentication

## Registerlogin.php
The file contains HTML code that is designed to create a registration form for students who want to access their account on a website. The form requires users to provide their name, username, and password, which is processed by the server-side scripting language to validate the input and store it in a database. In addition to the basic form elements, the HTML code may also include regex (regular expression) patterns to ensure that users only input correct words in the input boxes. This helps to improve the accuracy of the input data and prevent potential errors or security issues.

## Registerdb.php
The file contains PHP code that is used to connect the registration form to the database where the user input data is stored. The PHP code allows the data to be securely stored and retrieved from the database, ensuring that it is available for future use. Before the system store the input, the code will make sure to sanitize and validate the input first to prevent any sql injection, cross site scripting and more. In addition to this, the code also implements session management techniques for security purposes. Session management is an important aspect of web application security that helps to prevent unauthorized access to user data. It ensures that the user's session remains active while they are using the application, and that their data is kept secure and protected from potential attackers. Furthermore, the PHP code also uses the SHA1 hashing algorithm to store user passwords. SHA1 is a one-way cryptographic hashing algorithm that is commonly used to store passwords securely. It encrypts the password and stores the encrypted value in the database, which makes it difficult for attackers to access the password blindly.

## Authpage.php
The file contains HTML code that is designed to create a login form for users who have successfully registered on the website. The form requires users to enter their registered username and password, which will then be validated by the server-side scripting language before granting access to the web application. In addition to the basic form elements, the HTML code may also include regex patterns to ensure that users only input correct input. The regex function is used to validate the input data and prevent common security issues such as SQL injection, cross-site scripting, and other types of attacks.

## Connect.php
The PHP code is used for logging into the system and filling out a student details form. The input data is first validated and sanitized to prevent cross-site scripting attacks. Once this is done, the session is started and a connection is established with the database. The user's password is hashed by the application and compared to the stored hashed password. If the password and username match, the user is redirected to the studentdetails.php page. If the comparison fails, an alert is displayed to the user indicating that the username and/or password are invalid, and the user is asked to fill out the login form again with correct credentials.

## Authpage.css
The authpage.css file has been created to style the HTML elements present in the registerlogin.php and authpage.php files. The primary goal of this CSS file is to ensure that the HTML elements in the registerlogin.php and authpage.php files are aesthetically pleasing, easy to use, and consistent with the design of the application. The styles and design elements present in authpage.css may include various design elements such as font types, font sizes, color schemes, background images, and spacing between elements. These design elements are carefully chosen to ensure that the overall design is cohesive and visually appealing to the user. In addition to styling the various HTML elements present in the login and registration pages, the authpage.css file may also provide design elements for the submit button, such as its shape, size, color, and position on the page. The design of the submit button is important as it is one of the primary actions the user will take on these pages. The design of the submit button should be consistent with the overall design of the application and should be easy to locate and use for the user.

