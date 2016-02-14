# **G14C_University_Accomodation_Management_System**
**(Project assignment University Accomodation Management System, Project No 6)**

---
## **Required software to complete our system**

The following software stated below will be needed to be installed into our system before getting started.
>1. XAMPP (Apache, mySQL)
>2. Text Editor (Notepad, Notepad++ or Atom)
>3. Web Browser

##### Xampp (Apache, mySQL)
[Xampp](https://www.apachefriends.org/index.html ) is a free and open source cross-platform web server solution stack package developed by Apache Friends, consisting mainly of the Apache HTTP Server, MariaDB database, and interpreters for scripts written in the PHP and Perl programming languages. We are using the XAMPP server to host the database of MYSQL. Activating the XAMPP server by selecting the XAMPP Control Panel from the XAMPP Menu. After the XAMPP is activated, an icon       appears in the right hand bottom corner of the desktop. The XAMPP Control Panel interface is shown below when you double click the icon.Press the Start button of Apache and MySQL. MySQL will work smoothly when there is no error found in the bottom message box.

##### Text Editor
The text editors are needed to be able to write the code for our project which is the University Accomodation Management System. You can use any of your preffered text editor but mainly 4 of us used either [Notepad++](https://notepad-plus-plus.org/)  or the highly popular [Atom.io](https://atom.io/). We can also use our notepad to write down the programming language.  

##### Web Browser
Web Browser is used to view the design of our system and interact with it. On the other hand web broswer is also used to open the Xampp interface and also to start the SQL. A web browser can be used based on our preference either Google Chrome, Mozilla Firefox, Opera, Safari or etc.

---
## **Operating the system**

There are 13 php forms in total for our system.

---

The first form being the homepage (index.php) In the homepage there is 3 navigation tab. The first allows the user to either click on the homepage being the current page, or navigate to the about page or the admin login where the end user of the system is allowed to key in their credentials and accomodate student in getting a room with Multimedia University.

![Homepage](http://i.imgur.com/IRqBu6Y.jpg)

---

The second form which is the about page (about.php) is also a subset to the following four other forms which are the faculty tab (faculty.php), facilites tab (facilities.php), hostel tab (hostel.php)

![About](http://i.imgur.com/Yr9ocsQ.jpg)

>- about.php - contains the details about the current chancellor of Multimedia University.
>- facilities.php - contains the details about the facilities available in Multimedia University.
>- faculties.php - contains the details about the faculties available in Multimedia University.
>- hostel.php - contains the details about the hostels in Multimedia University.

---

The third form is the login form where the end user of the system is to login into the main form which is the form used for registration etc.
To login, the user is required to key in their credentials (username, password)


![Login](http://i.imgur.com/I1jkgP1.jpg)


The credentials is then cross-reference with the SQL file to verify the user's details. If it is succesful, user is then able to access the main form.


![succesful Login](http://i.imgur.com/nYR12n2.jpg)

---

The forth and final form is the main form (adminindex.php) where it is only accessible once the user has successfully login. In this form user brought to a menu where user can choose from the following options on the tab. This is where the user will register student to either book, check status and etc. There are 5 options (5 subset forms) in total as listed below:

![Menu](http://i.imgur.com/Kj7Uuzg.jpg)

- Registration tab - it is used to register the student's detail and store it into the database.

![Registration](http://i.imgur.com/gB5ecYe.jpg)

- Book Room tab - it is used to book a room of an available student of Multimedia University.

![Book Room](http://i.imgur.com/1e9q4ha.jpg)

- Check Status tab - it is used to check status of available student's that have booked a room in MMU's hostel. It is searched via a lease number that is provided after booking a room.

![Status](http://i.imgur.com/Tul5RJU.jpg)

- View Application tab - it is used to show all available student's that have booked a room with MMU's hostel accomodation system.

![View Application](http://i.imgur.com/5VErrjB.jpg)

- Logout tab - The logout tab does as it says. It logs out the user from the main form.

---
