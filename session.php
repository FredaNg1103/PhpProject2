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
           
        if(isset($_POST['submitted']))
        {
            
            if(!empty($_POST['name']))
            {
                session_start();
                $_SESSION['name']= $_POST['name'];
               // $_SESSION['loggedin']=time();
                
                
            }
        }
        
        ?>
        
        <form action="session.php" method="post">
        Name: <input type="text" name="name"/> <br/>
        
        <input type="submit" value="Ok"/>
        <input type="hidden" name="submitted" value="true"/>
        <?php
         // date_default_timezone_set('Singapore');
        
        print '<p> '.$_SESSION['name'].' is viewing </p>';
           
      unset($_SESSION);
      
      session_destroy();
        
        ?>
        </form>
    </body>
</html>
