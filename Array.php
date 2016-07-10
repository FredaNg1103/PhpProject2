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
      
        ini_set('display error', 1); 
        
        error_reporting(E_ALL,E_STRICT);
        
        $soups= array('Monday' => 'clam chowder',
            
                                    'Tuesday'=> 'White chicken chilli',
                                      'Wednesday'=> 'Vegetarian',
                                     'Thursday' => 'Chicken noodle,',
                                     'Friday' => 'Tomato',
                                    'Saturday'=> 'Cream of brocolli'
                                  

            );
        
      
      
     foreach ($soups as $day=>$soups){
         
         print "<p>$day:$soups </p>\n";
     }
        
            
        
        
        
        ?>
    </body>
</html>
