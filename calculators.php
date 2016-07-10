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
        
        <form action="calculators.php" method="post">
             
             <label> Number1 </label>
            <input type="text" name="number1" value=""> <br/>
            <label> Number 2 </label> 
             <input type="text" name="number2" value=""/> <br/>

             <input type="submit" />
        
         </form> 
          
        <?php
        
      $number1=$_POST['number1'];
      $number2=$_POST ['number2'];
      
      $sum= $number1+$number2;
      $minus= $number1-$number2;
      $multiply= $number1*$number2;
      $division= $number1/$number2;
        
     echo "Total: ,$sum,$minus,$multiply,$division";
     
        ?>
    </body>
</html>
