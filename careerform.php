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
        <style>
         .error {color: red;}
        </style>
    </head>
    <body>
        
        <?php

$nameErr = $emailErr = $jobsErr = "";
$name = $email = $comment = $jobs = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["jobs"])) {
    $jobsErr = "";
  } else {
    $jobs = test_input($_POST["jobs"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Email Address: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Jobs: <input type="text" name="jobs">
  <span class="error"><?php echo $jobsErr;?></span>
  <br><br>
  Message: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>


        
        
        
      
    </body>
</html>
