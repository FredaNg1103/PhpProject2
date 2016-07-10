<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

  
        <?php
        
        define ('TITLE','Login');
        require ('header.html');
        
        print '<h1> Login Form </h1> <p>Users who are logged in can take advantage of certain features  </p>';
        
        
        if(isset ($_POST ['submitted']) ) {
            
               if (  (!empty ($_POST ['email'])   ) && (!empty ($_POST ['password'])  )  ){
               
                   if ( ( strtolower($_POST['email']   )=='me@example.com'    ) && ($_POST['password'] =='testpass'  )   ){
                       
                      // print '<p> You are logged in</p>';
                       session_start( );
                       $_SESSION['email']=$_POST['email'];
                       $_SESSION['loggedin']=time( );
                       
                       
                       header ('Location:welcome.php');
                       
                     
                       exit( );
                       
                   }else {
                       
                       print '<p> Submitted email and password do not match</p>';
                       
                   }
                   
               }else {
                   
                   print '<p> Please make sure you enter both email and password </p>';
               }
              
               
                
               
            
        }else {
            
            print '  <form   method="post" action="" > 
           
          
            <p> Email address
             <input type="email" name="email" placeholder="Enter email" size="20"> </p> 
            
            <p> Password
           
            <input type="password" name="password"  placeholder="Enter Password" size="20"> </p>
            
            
            <p> <input type="submit" value="Login" />  </p>
            <input type="hidden" name="submitted" value="true"/>
           
         
        </form> ';
            
        
        }
        
        require ('footer.html');
        
        ?>
 