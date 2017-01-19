# WAMP-TodoList

This project is a web page created with the LAMP stack and serves as a todo list manager, keeping the user always up to date with their latest tasks.

##Dependencies
1. Apache2 server
2. MySQL
3. Php development libraries
4. (Optional) Netbeans IDE

##Deployment
On the target system you will have to install all of the packages listed in the dependencies section, along with making sure that the apache2 server and MySQL server are listening on port 80, for the apache2 server, and port 3306 for the MySQL server. I recommend using Ubuntu for the Linux server, with Windows will work as well, as long as you know how to configure apache, MySQL, and Php on your system.

For an in depth look at how to install the dependencies and set up the development environment, follow the steps located [here](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu)

## Work Breakdown

**1.** Install and start up the MySQL server  
**Estimated Time:** 10 minutes  
**Actual Time:** 5 minutes  
**Notes:** I have set up MySQL for other projects so I knew immediately what to do.  
**Issues:** None  

**2.** Install and start apache2 Linux server  
**Estimated Time:** 20 minutes  
**Actual Time:** 5 minutes  
**Notes:** I followed the steps listed [here](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04) so the installation was smooth and painless  
**Issues:** None  

**3.** Install php development files  
**Estimated Time:** 5 minutes  
**Actual Time:** 2 minutes  
**Notes:** I installed php via the Ubuntu software repository using apt-get, so the files were available.  
**Issues**: None  

**4.** Download the install Netbeans for Php development.  
**Estimated Time**: 2 minutes  
**Actual Time**: 30 minutes  
**Notes:** I had initially installed Netbeans via the Ubuntu repository using apt-get but this lacked project files for php development. This caused me to visit the Netbeans official [website](https://netbeans.org/downloads/). I also have to modify the Netbeans configuration files so that the project used the correct port number for the web page to run.  
**Issues:** Netbeans intalled via apt-get does not contain php development files, additional packages must be installed.

**5.** Create a basic php web page and communicate with MySQL  
**Estimated Time:** 1 hour  
**Actual Time:** 1 hour  
**Notes:** Setting up a basic php script and connecting it to MySQL was the easy part, hard parts were to come later!  
**Issues:** Virtually none, php as a language was relatively easy and quick to learn, and I already know MySQL.  

**6.** Create a functioning HTML web page, providing hooks in for eventual php scripting.  
**Estimated Time:** 3 hours  
**Actual Time:** 1 hour  
**Notes:** The basic web page along with CSS styling was easy to accomplish  
**Issues:** None  

**7.** Add Php scripting to the web page, supporting connections to MySQL  
**Estimated Time:** 2 hours  
**Actual Time:** 4 hours  
**Notes:** None  
**Issues:** When I reorganized my php code, I set the wrong table and database name for the project, and it took me an hour worth of time before I figured out what the issue was. I also did not realize that the php script was being completely reloaded on every POST operation.  

**8.** Connect the "Add Note" button up to Php in order to add a new entry to the MySQL database.  
**Estimated Time:** 30 minutes   
**Actual Time:** 1 hour  
**Notes:** I had to modify the Php script in order to check variable names inside of the _POST global variable.  
**Issues:** None  

**9.** Connect the "Remove Notes" button up to Php in order to remove entries to the MySQL database.  
**Estimated Time:** 15 minutes  
**Actual Time:** 15 minutes  
**Notes:** I used what I learned from hooking up the "Add Note" button, so this action was much quicker to implement.  
**Issues:** None  

**10.** Make the TextField change the notes message in MySQL  
**Estimated Time:** 30 minutes  
**Actual Time:** 1 hour  
**Notes:** I had to look up how to access input tag values from the _POST variable.  
**Issues:** None  

## Functional Requirements

* The MySQL database must be valid and initialized when the user accesses the web page.
* Added todo entries will be stored in the MySQL and stored across multiple sessions.
* Removed todo entries will be cached in the MySQL database so that the user can reenabled entries.

## Non-Functional Requirements

* The web page should perform in a soft-realtime environment, as in, user actions will be appear to be instantaneously.
* The user interface for the todo web page will be extremely easy to use and understandable with no prior exposure.
* Usability across mutliple operating systems will be a high priority and this application should work on mobile devices as well.

## Test Cases

**1.** Verify that the MySQL database is only initialized when the web page loads.

**Summary:** The mysql database should not be initialized more than once. User data will be completely wiped out and
  the application stability will be compromised.
  
**Prerequisites:**  
1. Install apache2 server.  
2. Install php  
3. Install mysql-server  

**Steps:**  
1. Start the apache server  
2. Copy the Todo Application folder to the Linux folder **/var/www/html**.  
3. Visit **http://localhost:80/index.php**  
4. If there are no visible error messages within the console, the application has only initialized the database once.  
 
**2.** Notes will not be added if the user does not input a message in the text box. 

**Summary:** When the user clicks on the "Add Note" button this will add in a note entry to the database, however, users that do not entry a message into the text box will not see their addition added to the database. This is to assure that database only contains valid data.

**Prerequisites:**  
1. Install prerequisities from test case 1.   

**Steps:**  
1. Launch the web page  
2. Without entrying any data into the text box, click on the "Add Note" button  
3. No note additions should visually show up. 

**3.** If the user clicks on the "Remove Notes" button with multiple checked message checkboxes, the MySQL database will delete all of them from the database.  

**Summary:** The user needs to be able to complete batch deletions of different tasks. This will greatly reduce the ammount of work that the user will have to do and reduce server load.  

**Prerequisites:**  
1. Install prerequisities from test case 1.   

**Steps:**  
1. Launch the web page  
2. Add more than one note to the Todo List web page  
3. Check the checkbox of more than one note  
4. All of the checked user messages should be deleted  
5. None of the unchecked messages should have been deleted  

## Use Case Diagram

![use_case_img](images/UseCase.png?raw=true "Use Case Diagram")

## Database Diagram
![er_diagram_img](images/erdplus-diagram.png?raw=true "ER-Diagram")

## Class Diagram
![class_diagram_img](images/ClassDiagram.png?raw=true "Class Diagram")

## Sequence Diagram
![sequence_diagram_img](images/SequenceDiagram.png?raw=true "Sequence Diagram")

## System Architecture Diagram
![sys_arch_img](images/SysArch.png?raw=true "System Architecture Diagram")

## Data Flow Diagram
![data_flow_img](images/DataFlow.png?raw=true "Data Flow Diagram")

