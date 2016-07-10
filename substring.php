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
        
        <form action="" method="post">
            
            First Name <input type="text" name="firstname"/> <br/> <br/>
            Last Name <input type="text" name="lastname"/><br/> <br/>
            Email <input type="email" name="email"/> <br/> <br/>
            Comments <br/> <textarea name="posting" rows="10" cols="50"> </textarea> <br/><br/>
            
            <input type="submit" value="submit"/>
           
            
        </form>
        
     
        <?php
        
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $posting=  nl2br($_POST['posting']);
        
      $name = $firstname. ' '.$lastname;
        
        $words = str_word_count($posting);
        
        $posting=substr($posting,0,50);
        
        $posting = str_ireplace('badword', 'xxxxx',$posting);
        
        
        print " <div> Thank you $name for your <p> $posting </p> <p> ($words words)</p> </div>";
      
        
        ?>
    </body>
</html>
