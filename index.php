<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="index.css">

        <title>Todo List</title>
    </head>
    <body>

        <form action="" method="post">       


            <div id="headerBar">

                <button id="addNoteButton" type="submit" name="addNoteButton" >
                    Add Note
                </button>

                <button id="removeNoteButton" type="submit" name="removeNoteButton">
                    Remove Notes
                </button>

            </div>
            <?php

            function init_mysql(&$mysqlConnection, $databaseName, $tableName) {

                echo("init");

                $mysqlConnection->query("DROP DATABASE $databaseName");

                $statement = "CREATE DATABASE IF NOT EXISTS $databaseName";
                if ($mysqlConnection->query($statement) === FALSE) {
                    echo ( "Error creating database: " . $mysqlConnection->error );
                } else {
                    echo ( "$dbName as set up!" );


                    if ($mysqlConnection->select_db($tableName)) {
                        
                    }

                    if ($mysqlConnection->query("CREATE TABLE IF NOT EXISTS $tableName ("
                                    . "taskID INT AUTO_INCREMENT PRIMARY KEY,"
                                    . "data VARCHAR(255) NOT NULL"
                                    . ")") === TRUE) {



                        $mysqlConnection->query("INSERT INTO $tableName (data) VALUES('I am an apple lord')");
                    }
                }
            }

            $dbName = "taskList";
            $tableName = "tasks";

            $mysqlConnection = new mysqli("localhost", "root", "123");

            //if ( !function_exists('init_mysql' ) ) {
            init_mysql($mysqlConnection, $dbName, $tableName);
            //}

            if ($mysqlConnection->connect_error) {
                echo("MYSQL connection refused: " . $mysqlConnection->connect_error);
            }

            if (isset($_POST["addNoteButton"])) {
                $result = $mysqlConnection->query("SELECT data FROM $tableName");

                $mysqlConnection->query("INSERT INTO $tableName (data) VALUES ('Seymore Butts')");
            }
//            } else if( isset( $_POST["removeNoteButton"] ) ) {
//                
//                //$mysqlConnection->commit();
//            }
            // Update web page rows
            $result = $mysqlConnection->query("SELECT data FROM $tableName");
            while ($result->num_rows != 0 && $row = ( $result->fetch_assoc() )) {
                echo( "<div class='listItem'>"
                . "<input type='checkbox' class='itemCheckBox'>"
                . "$row[data]"
                . "</input>"
                . "</div>" );
            }

            $mysqlConnection->commit();

            $mysqlConnection->close();
            ?>

        </form>

    </body>
</html>
