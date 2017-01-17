<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function init_mysql(&$mysqlConnection, $databaseName, $tableName) {

//    echo( $_SESSION[ "onCompleted"] . "<br>" );
//    $_SESSION[ "onCompleted" ] = "completed";
//    if ( $mysqlConnection->query("DROP DATABASE $databaseName") === TRUE ) {
//        echo("KILLED DB<br>");
//    } else {
//    }
    $statement = "CREATE DATABASE IF NOT EXISTS $databaseName";
    if ($mysqlConnection->query($statement) === FALSE) {
        echo ( "Error creating database: " . $mysqlConnection->error );
    } else {

        if ($mysqlConnection->select_db($databaseName)) {
        }

        if ($mysqlConnection->query("CREATE TABLE IF NOT EXISTS $tableName ("
                        . "taskID INT AUTO_INCREMENT PRIMARY KEY,"
                        . "data VARCHAR(255) NOT NULL"
                        . ")") === TRUE) {

        }
    }
}
