<html>
    <head>
                <title>GRIP banking</title>
                <meta charset="UTF-8">
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
               <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
               <link rel="preconnect" href="https://fonts.gstatic.com">
               <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
               <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        
        
        <section class="header">
            
           <nav>
               
               <div class="nav-links">
                   
               <ul>
                   <a href="" class="logo" target="_blank"><b>Indian Railways</b></a>
                   <li><a href="index.php"><b>Home</b></a></li>
                   <li><a href="users.php"><b>Book Seats</b></a></li>
                   <li><a href="transfer.php"><b>View Trains</b></a></li>
                   <li><a href="history.php"><b>Seat Availability</b></a></li>
               </ul>
               </div>
           </nav>
            
            
            <div class="trans">
                <h1 style="color:red;"><b>Check</b></h1>
                
                <form action="" method="POST">
                
                <div class="row">
                    <label style="font-size: 23px;font-family: 'Nunito Sans', sans-serif;">Source</label><br>
                    <select name="sender" id="sender" required  style=" height: 30px; width:190px; "><br>
                        <option value="0" disabled selected>Choose Source</option><br>
                       
                    </select>
                </div>
                
                
                
                    
                 <div class="row">
                    <label style="font-size: 23px;font-family: 'Nunito Sans', sans-serif;">Destination</label><br>
                    <select name="receiver" id="receiver" class="ip box" required style=" height: 30px; width:190px; "><br>
                        <option value="0" disabled selected>Choose Destination</option><br>
                        
                    </select>
                   </div>
                
                
                    
                    <div class="row">
                        <label  required style="font-size: 23px;font-family: 'Nunito Sans', sans-serif; ">Amount</label><br>
                        <input type="number"  name="amount"  style=" height: 30px; width:190px ;padding-left: 5px; "><br>
                        
                    </div>
                
                <div class="button">
                    <button class="hero-button" name="submit" type="submit" id="myBtn" ><b>Transfer</b></button>
                </div>
                    
                 
                 </form>
             </div>
               
        
            
          
                 
        </section>    
              
    
       
      <!---------------------- socail media icon------------>
        
        
        
   <!-------------------------------------Footer---------------------->
   <footer>
       <p>copyright © 2021<br> Made by: Gyan Prakash Ram</p>
  <p><a href="mailto:gyanprakashram98@gmail.com">Contact me</a></p>
</footer>
       
</body>
</html>
   
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
  
    </body>
    
</html>