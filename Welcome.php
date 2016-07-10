<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php
            
        session_start( );
        
        define ('TITLE','Welcome to Elliott Smith fan club');
        require ('header.html');
        
     
    

print '<h1> Welcome,'.$_SESSION['email'].'! </h1>';

date_default_timezone_set('Singapore');

print '<p> You have been logged in since:'.date('g:i a',$_SESSION['loggedin']). '</p>';

print '<p><a href="loginform.php"> Click here to logout. </a> </p>';

require('footer.html');

?>
