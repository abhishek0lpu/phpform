
    <!doctype html>  
    <html>  
    <head>  
    <title>Register</title>  
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
             h2 {  
        color: indigo;  
        font-family: verdana;  
        font-size: 100%;  
    }</style>  
    </head>  
    <body>  
         
        <h1>CREATE REGISTRATION AND LOGIN FORM USING PHP AND MYSQL</h1>
       <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>  
        <h2>Registration Form</h2> 
    <form action="" method="POST">  
        <legend>  
        <fieldset>  
              
    Username: <input type="text" name="username"><br />  
    Password: <input type="password" name="password"><br />
    Phone: <input type="text" name="Phone"><br />  
    Email: <input type="text" name="Email"><br />   
    <input type="submit" value="Register" name="submit" />  
                  
            </fieldset>  
            </legend>  
    </form>  
    <?php  
    if(isset($_POST["submit"])){  
        if(!empty($_POST['username']) && !empty($_POST['password'])){  
            $user=$_POST['username'];
            $pass=$_POST['password'];
            $Phone=$_POST['Phone'];
            $Email=$_POST['Email'];

            $conn = mysqli_connect('localhost', 'root', 'password');
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            else{
                echo "Connected successfully";
                echo "$user";
            }
            
        }
    }  
    
 
        
// sending data
$sql = "INSERT INTO `login`.`login` (`usern`,`passw`,`Phone`,`Email`) VALUES ('$user','$pass','$Phone','$Email')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
     
    </body>  
    </html>   

