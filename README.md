# LAMP-STACK



Making website that has Add,Display,Delete,Update Features using Lamp Stack

Prerequisites : Ubuntu linux in VM or Dual Booted 
ram above 6 GB is prefered in case of Virtual Machine.

Note : Mysql commands Should be written in capitals.


## Installation 
Step 1: Update the system and Install the apache2 by using the below commands

```bash
sudo apt update
sudo apt install apache2
```


for adjusting the firewall
```bash
sudo ufw allow in "Apache"
You can verify the change with:
 sudo ufw status
```
Then find the ip address of your system by 
```bash
ifconfig
```

You can type ```http://your_server_ip``` or localhost in your browser to check the installlation .Ubuntu default web page will be displayed 
if all the installation and settings done properly 

Step 2: Installation of MySQL

To install the MySQL follow the below steps

```bash
sudo apt install mysql-server
sudo mysql_secure_installation
```
Press y when asked to validate password & for all questions that are posed.
if you enocunter error like this 

Set up mysql root use with password using

```bash
sudo mysql_secure_installation utility
```

then type  sudo mysql
if it opens the mysql console
```bash
mysql>
```

'''bash
 'Access denied for user 'root'@'localhost(using password :YES)
 or
 Access denied for user 'root'@'localhost(using password :NO
```

follow below commands

u can reset your password 
```bash
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'your_password';
```
here your_password is the password set by you 
try to use 
```bash
sudo mysql -u user_name -p password 
```
so the user logs in in case of no user set the user_name to root

step 3- Installing PHP
```bash
sudo apt install php libapache2-mod-php php-mysql
```
step-4 - Creating the virtual host
Here your_domain means the domain name which you want to give 
```bash
sudo mkdir /var/www/your_domain
```
and enable some permissions and confugring files in Apache's sites-available directory 

Now use the below command to enable the new virtual host:
```bash
sudo a2ensite your_domain
```
And reload Apache to save the changes
```bash
sudo systemctl reload apache2  
```      
##Database set-up and table creation

Step 1 : Go to mysql console

create Database with name with following commmands
in somecases the datbase wont be created so u have to login into root user and create the date base and exit from it.
in my case the database name is bikes u can give any name
```bash
CREATE DATABASE bikes;
```
To verify the database is created or not type
```bash
SHOW DATABASES;
```
Step 2: create a table in that database in my case the table name is list
```bash
CREATE TABLE bikes.list (
    item_id INT AUTO_INCREMENT,
    company VARCHAR(255),
    model VARCHAR(255),
    year VARCHAR(255),
    PRIMARY KEY(item_id)
);
```
To insert few data into database use 
```bash
INSERT INTO bikes.list (company,model,year) VALUES ("text about company","text about model","text about year");
```
use the above command as many times u want to insert the data and if you want the check wheather the data has been succesfully added or not run the following 
```bash
SELECT * FROM bikes.list;
```
## File creation and connnection

###Step 1: 
the first should be layout or database connecting php code 
order of files is interchangable but we have to conncet to database first 

create a file <name.php> for me connect.php with below content in 

```bash
nano /var/www/domain_name name.php.
<?php
$con=mysqli_connect("localhost","user_name","password","bikes");
if(!$con)
{
    die("cannot connect to server");
}
?>
```
When ever you need to acces the database u can include this php file and use the variables to know about the connnection

###Step 2:Layout making 

Layout making is using the design aspects and including style sheets and etc.. to make the web page look beautiful.
I used some aspects of boostarp like buttons and html forms to colllect data from user

Inputs are taken in index.php file and can be passed to all files.

###step 3:
Creatig various file to performvarious operations  like add delete update



In every .php file we include connect.php
and get values with POST & GET

SOME OF THE IMP COMMANDS

##$_POST : is actually PHP super global variable which is used to colllect form data after submitting an HTML form and to pass variables.

##$_GET  : also a super global variables which used to get variable from querystring.


in add.php file to append to database we use insert into command 
```bash
insert into list(company,model,year)values('$company','$model','$year')";
```


to delete from the database 
we use delete from command based on item_id the primary key which automaticcaly incremented for each entry

```bash
delete from demo_table where item_id=$item_id
```
$item_id=variable : id of the row is given


Upadation of Database 
```bash
"update list set company='$company', model='$model' ,year='$year' where item_id=$item_id"; 
```
 
 all these commads are done when the connection to mysql database is maintained after performing neccessary operations the connection is closed.
 
##Conclusion
we can go to the browser and type the localhost/html/index.php
and see how the changes made reflected and used them to add delete or update the database















