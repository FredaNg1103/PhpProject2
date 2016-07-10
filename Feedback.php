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
        
        <form action="Feedback.php" method="Post">
            
            First Name <input text="text" name="firstname"/> <br/>
            Last Name <input type="text" name="lastname"/><br/> <br/>
           
            Feedback <textarea name="message" rows="10" cols="50"> </textarea> 
            
       <input type="submit"/>
       
        </form>
        
        
        <?php
        
        $firstname=$_POST ['firstname'];
        $lastname=$_POST ['lastname'];
        
        $message=$_POST['message'];
        
        echo 'Thank you for your feedback' . '     ' .$firstname.'   '  .$lastname. '     ' .$message;
        
        
        ?>
    </body>
</html>
