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
            
           
                 <select name="month">
                        <option value="">Month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                    </select>
            <br/>
            
             <input type="text" name="day"/>
            
            <br/>
            
             <input type="text" name="year"/>
          
           
            <input type="submit" value="Click"/>
            
            
        </form>
        
        
        
        <?php
        
        $okay= TRUE;
        
        if(is_numeric($_POST['month'])){
            $birthday = $_POST['month']. '-';
    }
     else{
           print '<p class="error">Please enter the month you were born.</p>';
          $okay = FALSE;
    }
         if(is_numeric($_POST['day'])){
           $birthday .= $_POST['day']. '-';
   }
     else{
    print '<p class="error">Please enter the month day were born.</p>';
    $okay = FALSE;
   }
   if(is_numeric($_POST['year'])){
       $birthday .= $_POST['year'];
   }
   else{
      print '<p class="error">Please enter the year day were born.</p>';
      $okay = FALSE;
   }
     if($okay){
    print '<p>You have success</p>';
    print '<p>You entered birthday as' .$birthday .'</p>';
   }
        
        
        
        ?>
    </body>
</html>
