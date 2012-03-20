<?php

//create a connecton to the database. We are using PDO to abstract away which database type we are connecting to.
//PDO Allows us to connect to many different databse types: Mysql, Aqlite, MSsql, oracle, ETC. 

$user = 'root'; // mamp's and wamp's default user is root
//edumedia's username is your algonquin user name example: karn0010

//Wamp's defualt password is nothing, an empty string
//Mamp's default password is root
//edumedia password is student number without the first 0
$pass = '';


//data source name
//the location and the name of the database
$dsn = 'mysql:dbname=karn0010;host=localhost';
// localhost above means the database server is on the same computer as this PHP file

$db = new PDO($dsn, $user, $pass); 

//force our connection to be UTF-8  
//one of three ways we can write sql to our database 
$db->exec('SET NAMES utf8');  //this means to make the connections to a utf-8