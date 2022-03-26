<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
        <meta charset="UTF-8">
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
       <link rel="stylesheet" href="register2.css">
</head>
<body>
    
    
    <section class="header">
           <nav>
               <div class="nav-links">
               <ul>
                   <a href="https:" class="logo" target="_blank"><b>Indian Railways</b></a>
                   <li><a href="index.php"><b>Home</b></a></li>
                   <li><a href="seatbook.php"><b>Book Seats</b></a></li>
                   <li><a href="viewtrains.php"><b>View Trains</b></a></li>
                   <li><a href="history.php"><b>Seat Availability</b></a></li>
                   <li><a href="resister.php"><b><mark>Register</mark></b></a></li>
                   <li><a href="login.php"><b><mark>Login</mark></b></a></li>
                   
               </ul>
               </div>
           </nav>
           
          
           
         
    
    
    
    
    
     <form action="" method="POST">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button name="submit" type="submit">Sign Up</button>
        
        
        
        <a href="login.php" class="ca">Already have an account?</a>
     </form>
        
        
        
</section>
    
    <?php
            function setData($name,$password,$username){
                $db = mysqli_connect("localhost","root","","railway");

                if(!$db)
                {
                 die("Connection failed: " . mysqli_connect_error());
                }
                $userID = $username.$password;
                $setDataQuery = "insert into users values('".$userID."','".$name."','".$password."','".$username."');";
                $db->query($setDataQuery);
                echo '<script>alert("Registration Successful!")</script>';
                
                echo "<script>window.location='login.php';</script>";
            }

              
            if(isset($_POST['submit']))
            {
                $name= $_POST['name'];
                $uname = $_POST['uname'];
                $password = $_POST['password'];
                $re_pass = $_POST['re_password'];
                echo $name;
                echo $uname;
                echo $password;
                echo $re_pass;
                if($password==$re_pass){
                    setData($name,$password,$uname);
                }
                else{
                    echo '<script>alert("Password mismatch.")</script>';
                }
            }
 else {
     echo "something went wrong";
 }
               ?>
    
    
</body>
</html>