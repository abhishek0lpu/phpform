

    <!doctype html>  
    <html>  
    <head>  
    <title>Login</title>  
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
                h1 {  
        color: indigo;  
        font-family: verdana;  
        font-size: 100%;  
    }  
            h3 {  
        color: indigo;  
        font-family: verdana;  
        font-size: 100%;  
    } </style>  
    </head>  
    <body>  
         <h1>CREATE REGISTRATION AND LOGIN FORM USING PHP AND MYSQL</h1>
       <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>  
    <h3>Login Form</h3>  
    <form action="" method="POST">  
    Email: <input type="text" name="Email"><br />  
    Password: <input type="password" name="password"><br />   
    <input type="submit" value="Login" name="submit" />  
    </form>  
    <?php  
     //echo "abcd";
     echo "$user";
    if(isset($_POST["submit"])){  
      
    if(!empty($_POST['Email']) && !empty($_POST['password'])) {  
        $user=$_POST['Email'];  
        $pass=$_POST['password'];  
      //echo $pass;
      
        $conn=mysqli_connect('localhost','root','password');  
        
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";



// mysqli_close($conn);
      

       $sql= "SELECT * FROM `login` . `login` WHERE Email='".$user."' AND passw='".$pass."'";
       $result = mysqli_query($conn, $sql);

        $numrows=mysqli_num_rows($result);
        echo $numrows;
    
        if($numrows!=0)  
         {  
       while($row=mysqli_fetch_assoc($result))  
      {  
         $dbusername=$row['Email'];  
         $dbpassword=$row['passw'];  
        
         //echo $dbusername;
       }  
      
      if($user == $dbusername && $pass == $dbpassword)  
       {  
          // echo "login sucess";
           
        session_start();  
        $_SESSION['sess_user']=$user;  

       $_SESSION['myvar']=$pass;
        /* Redirect browser */  
        
        header("location:member.php");  
        }  
       } 
        else {  
        echo "Invalid username or password!";  
        }  
      
    } 
    else {  
        echo "All fields are required!";  
    }  
     }  
    ?>  
    </body>  
    </html> 