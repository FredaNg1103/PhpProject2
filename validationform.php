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
            
            Email <input type="email" name="email"/>
            
            <br/> <br/>
            
            Password <input type="password" name="password"/>
            
            <br/> <br/>
            
            Confirm Password <input type="password" name="confirm"/>
            
            <br/> <br/>
            
            Date of birth   <select name="month">
                        <option value="">Month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                    </select>
            
            <select name="day">
                
                <option value=""> Day </option>
                <option value="1"> 1 </option>    
                 <option value="2"> 2</option>
                  <option value="3"> 3</option>
                   <option value="4"> 4 </option>
                    <option value="5"> 5 </option>
                
                
            </select>
            
            <input type="number" name="year"/>
            
            <br/> <br/>
            
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
        
        if(empty($_POST['email'])){
            
            print '<p class="error"> Please enter your email address </p>';
            $okay= FALSE;
            
        }
        
        
         if(empty($_POST['password'])){
            
            print '<p class="error"> Please enter your password </p>';
            $okay= FALSE;
            
        }
        
        
          if($_POST['password'] != $_POST ['confirm']){
            
            print '<p class="error"> Your confirmed password does not match the origin password </p>';
            $okay= FALSE;
            
        }
        
        
        
        if(is_numeric ($_POST['year'])and (strlen ($_POST['year']) ==4 ) ){
        
                   if ($_POST ['year'] >=2016){
            
                      print '<p> You enter the wrong year </p>';
                      $okay=FALSE;
            
                 }else{
            
                   $birthday= $_POST['year'];
               }
        
        
        }else{
            
            print '<p class="error"> Please enter the year you were born in 4 digits </p>';
            $okay=FALSE;
        }
        
        
        if($_POST['color'] == 'red') {
            
            print '<p style="color:red">red </p>';
            
            
        }elseif ($_POST['color']=='yellow'){
            
                print '<p style="color:yellow">yellow </p>';
            
        }elseif ($_POST ['color']=='green'){
              print '<p style="color:green">green </p>';
              
        }elseif ($_POST ['color']=='blue'){
            
             print '<p style="color:blue">blue </p>';
              
        }else{
            print '<p> Choose your colour</p>';
            
        }
         
        
        if($okay){
            
            print '<p> You have successfully registered </p>';
          
        }
         
      
        ?>
    </body>
</html>
