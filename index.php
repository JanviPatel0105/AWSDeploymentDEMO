<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 
  $host = 'database-1.cxrzetjxghjt.us-east-1.rds.amazonaws.com';
  $user ='admin';
   $pass ='Janvi.123';
   $db = 'DEMO';
   
   
   $con = new mysqli($host,$user,$pass,$db);
  
   if($con->connect_errno){
      print("Connection Failed ");
   }else{
      print("Connection Established Successfully");
   }
  
  echo '<p>Hello World</p>'; 
  

  ?> 
 </body>
</html>