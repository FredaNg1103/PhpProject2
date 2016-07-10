<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        if($dbc=mysqli_connect('localhost','root',''))
        {
            print '<p>Successfully connected to MySql </p>';
           // mysqli_close($dbc);
            if(@mysqli_Query($dbc,'Create Database myblog'))
            {
                print '<p> The database has been created </p>';
            }
            else{
                print '<p style="color:red;">Could not create the database because: <br/> '.mysqli_connect_error($dbc ). ' </p>';
            }
            
            
            if(@mysqli_select_db($dbc,'myblog'))
            {
                print '<p> The database has been created </p>';
            }
            else
            {
                 print '<p style="color:red"> Could not select the database because: <br/> '.mysqli_connect_error($dbc). '</p>';
            }
            
        }
        else
        {
            print '<p style="color:red;">Could not connect to MySQL:.'.mysqli_connect_error($dbc ). ' </p>';
        }
        
        
        
        
        
        ?>
    </body>
</html>
