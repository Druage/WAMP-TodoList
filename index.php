<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="index.css?" />

        <title>Todo List</title>
    </head>
    <body>

        <form action="index.php" method="post">       


            <div id="headerBar">

                <div id="headerRow">
                    <button id="addNoteButton" type="submit" name="addNoteButton" >
                        Add Note
                    </button>
                    <input id="addNoteMessage" name="addNoteMessage" type="text" placeholder="Leave a message...">
                </div>

                <button id="removeNoteButton" type="submit" name="removeNoteButton">
                    Remove Notes
                </button>

            </div>
            <?php
            
            require 'init_mysql.php';
            
            $dbName = "taskList";
            $tableName = "tasks";

            $mysqlConnection = new mysqli("localhost", "root", "123");

            init_mysql($mysqlConnection, $dbName, $tableName);
            if ($mysqlConnection->connect_error) {
                echo("MYSQL connection refused: " . $mysqlConnection->connect_error);
            }

            if (isset($_POST["addNoteButton"])) {
                $message = $_POST["addNoteMessage" ];
                
                if ( $message != "" ) {
                    $mysqlConnection->query("INSERT INTO $tableName (data) VALUES ('$message')");
                }
            } else if( isset( $_POST["removeNoteButton"] ) ) {
                
                foreach ($_POST['listItemArray'] AS $item) {
                    $mysqlConnection->query( "DELETE FROM $tableName WHERE taskID = $item" );
                }
            }
                        
            // Update web page rows
            $result = $mysqlConnection->query("SELECT taskID, data FROM $tableName");
            
            $i = 0;
            while ($result->num_rows != 0 && $row = ( $result->fetch_assoc() )) {
                echo( "<br><div class='listItem'>"
                . "<input type='checkbox' class='itemCheckBox' name='listItemArray[]' value=$row[taskID]>"
                . "$row[data]"
                . "</input>"
                . "</div>" );
                
                ++$i;
            }

            $mysqlConnection->commit();

            $mysqlConnection->close();
            ?>

        </form>

    </body>
</html>
