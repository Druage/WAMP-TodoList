# WAMP-TodoList

## Work Breakdown

**1.** Install and start up the MYSQL server  
**Estimated Time:** 10 minutes  
**Actual Time:** 5 minutes  
**Notes:** I have set up MYSQL for other projects so I knew immediately what to do.  
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

**5.** Create a basic php web page and communicate with MYSQL  
**Estimated Time:** 1 hour  
**Actual Time:** 1 hour  
**Notes:** Setting up a basic php script and connecting it to MYSQL was the easy part, hard parts were to come later!  
**Issues:** Virtually none, php as a language was relatively easy and quick to learn, and I already know MYSQL.  

**6.** Create a functioning HTML web page, providing hooks in for eventual php scripting.  
**Estimated Time:** 3 hours  
**Actual Time:** 1 hour  
**Notes:** The basic web page along with CSS styling was easy to accomplish  
**Issues:** None  

## Functional Requirements

* The MYSQL database must be valid and initialized when the user accesses the web page.
* Added todo entries will be stored in the MYSQL and stored across multiple sessions.
* Removed todo entries will be cached in the MYSQL database so that the user can reenabled entries.

## Non-Functional Requirements

* The web page should perform in a soft-realtime environment, as in, user actions will be appear to be instantaneously.
* The user interface for the todo web page will be extremely easy to use and understandable with no prior exposure.
* Usability across mutliple operating systems will be a high priority and this application should work on mobile devices as well.

## Test Cases

**1.** Verify that the MYSQL database is only initialized when the web page loads.

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
 
**2.** 

**3.**

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

