<?php   
//   session_start();
//  if($_SESSION['sess_user']==NULL )
//  {
//     header("location:login.php"); 
// }
// else{
?>  
<!doctype html>  
<html>  
<head>  
<title>Welcome</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
              
          
    </style>  
</head>  
<body>  
    <h1>Welcome </h1>  
      
<h2>Welcome, <?=$_SESSION['sess_user'],$_SESSION['myvar'];?>! <a href="logout.php">Logout</a></h2>  
<p>  
Your account is created. 
</p>  
</body>  
</html>  
<?php  
//} 
?> 