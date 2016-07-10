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
            
            
            <select name="color">
                
                <option value=""> Color </option>
                <option value="red"> Red </option>
                
                 <option value="yellow"> Yellow</option>
                  <option value="green"> Green</option>
                   <option value="blue"> Blue </option>
                   
                
            </select> <br/> <br/>
            
             <input type="submit" value="Register"/>
            
        </form>
        
        
        
        <?php
        
        $okay=TRUE;
       
        switch ($_POST ['color']){
            
            
            case 'red':
                print '<p> Red</p>';
                break;
            case 'yellow':
                print  '<p> Yellow</p>';
                break;
            case 'green':
                print  '<p> Green</p>';
                break;
            case 'blue':
                  print  '<p> Blue</p>';
                break;
            default:
                print  '<p class="error">Select your colour </p>';
                $okay=FALSE;
                break;
                
      
            
        }
       
        
        
        
        ?>
    </body>
</html>
