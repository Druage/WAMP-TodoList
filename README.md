# WAMP-TodoList

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

## ER-Diagram
![er_diagram_img](images/erdplus-diagram.png?raw=true "ER-Diagram")



