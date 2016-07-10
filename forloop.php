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
        
        <form action ="" method="post">
            
            <select name="Year">
                
                <option value="Year">Year </option>
                
        
  
        <?php
        
        for ($y =1900 ; $y<=2016;$y++){
            
            print "<option value='.$y'.> $y </option> \n";    
            
            
            
        }
       
           
        ?>
                   
        </select>
            
            
            <br/> <br/> <br/>
            
            
            <select name="Day">
                
                <option value="Day">Day </option>
                
        
  
        <?php
        
        for ($d =1 ; $d<=31;$d++){
            
      print '<option value="'.$day.'">'.$day.'</option>\n';
            
            
        }
       
           
        ?>
                   
        </select>
            
          
         
            
            
        </form>
    </body>
</html>
