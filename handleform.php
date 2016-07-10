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
        
        <p> Please complete the form</p>
        
        <form action="" method="post">
            
            <p> Name: 
          <select name="title">
              
              <option value="Mr:"> Mr. </option>
              <option value="Mrs:"> Mrs. </option>
              <option value="Ms:"> Ms. </option>
              
          </select>
            
          <input type="text" name="name" size="20"/> </p>
        
        <p> Email Address: <input type="text" name="email" size="20"/> </p> 
        
        <p> Response: This is......
        <input type="radio" name="response" value="excellent"/>excellent
        <input type="radio" name="response" value="ok"/>ok
        <input type="radio" name="response" value="boring"/>boring </p> 
       
        <input type="submit">
            
        </form>
        
        
        
        <?php
        
        $title= $_POST['title'];
        $name= $_POST['name'];
        $response=  $_POST['response'];
        
        
        echo "<p>Thank You, $title $name,for your comments. </p> <p> You stated that you found this example to be '$response' and added </p>";
        
        ?>
    </body>
</html>
