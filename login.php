<!DOCTYPE html>
<html lang="en">
  
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;500&display=swap" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
       
       
       
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>
  
<body>
    
   <section class="header">
           <nav>
               <div class="nav-links">
               <ul>
                   <a href="https:" class="logo" target="_blank"><b>Indian Railways</b></a>
                   <li><a href="index.php"><b>Home</b></a></li>
                   <li><a href="seatbook.php"><b>Book Seats</b></a></li>
                   <li><a href="reg.php"><b>View Trains</b></a></li>
                   <li><a href="history.php"><b>Seat Availability</b></a></li>
                   
                   
               </ul>
               </div>
           </nav>
           
           
         </section> 
    
    
    
    
 
 
 
  
      
   
    
    
    
    
    
    
    <form action="" method="POST">
        <div class="login-box">
            <h1>Login</h1>
  
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="User"
                         name="adminname" value="">
            </div>
  
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
  
            <input class="button" type="submit"
                     name="submit" value="Sign In">
            
            <div class="container signin">
                <p>Don't have an account? <a href="register2.php">Register</a>.</p>
      </div> 
            
        </div>
        
       
    </form>
    
    
    <?php
        function checkUser($username,$password){
                $db = mysqli_connect("localhost","root","","railway");

                if(!$db)
                {
                 die("Connection failed: " . mysqli_connect_error());
                }
                $userID = $username.$password;
                $setDataQuery = "select * from users where userID='".$userID."';";
                $result = $db->query($setDataQuery);
                if (!empty($result) && $result->num_rows > 0)
                    
                    echo "<script>window.location='seatbook.php';</script>";
                else
                   echo '<script>alert("User does not exist !")</script>';
                    echo "<script>window.location='login.php';</script>";
                
                
        }
        if(isset($_POST['submit']))
            {
                $uname = $_POST['adminname'];
                $password = $_POST['password'];
                checkUser($uname,$password);
            }
    ?>
</body>
  
</html>