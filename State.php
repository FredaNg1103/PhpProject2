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
        
        <form action="State.php" method="post">
            
        <select name="states">
            
            <option value="Perlis"> Perlis </option>
             <option value="Kedah"> Kedah </option>
              <option value="Penang"> Penang </option>
               <option value="Perak"> Perak  </option>
                <option value="Selangor">  Selangor</option>
                 <option value="Kuala Lumpur"> Kuala Lumpur  </option>
                  <option value="Negeri Sembilan"> Negeri Sembilan </option>
                   <option value="Melaka"> Melaka </option>
                    <option value="Johor"> Johor </option>
                     <option value="Kelantan"> Kelantan </option>
                      <option value="Terengganu">Terengganu </option>
                       <option value="Pahang"> Pahang  </option>
                        <option value="Sarawak"> Sarawak  </option>
                          <option value="Sabah"> Sabah </option>
            
            
        </select>   <br/>
            
            <select name="pizzasize">
                
                <option value="30"> Large </option>
                <option value="20"> Medium</option>
                <option value="10"> Small </option>
                
               
            </select> <br/> 
            
          
           <input type="radio" name="Soup" value="5"/> Yes <br/>
           <input type="radio" name="Soup" value="0"/> No <br/> <br/> 
           
            <input type="radio" name="Bread" value="2"/> Yes <br/>
            <input type="radio" name="Bread" value="0"/> No <br/> <br/>
            
     
             <input type="radio" name="Pepsi" value="2"/> Yes <br/>
             <input type="radio" name="Pepsi" value="0"/> No <br/> <br/>
            
             <label> How many Pizza's you want? </label>
             
             <input type="text" name="quantity"/> 
           
        
            <input type="submit"/>
        
        </form>
        
        <?php
       
        $states= $_POST['states'];
        $pizzasize= $_POST ['pizzasize'];
        $Soup = $_POST ['Soup'];
        $Bread= $_POST ['Bread'];
        $Pepsi = $_POST ['Pepsi'];
        $quantity = $_POST ['quantity'];
        
        
        echo "Your selected state is $states , $pizzasize size , $Soup , $Bread,$Pepsi and $quantity";
        
        ?>
    </body>
</html>
