<html>
    <head>
        <title>GPticket</title>
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
       <link rel="stylesheet" href="seatbook.css">
       
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
       
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
                   
                   
               </ul>
               </div>
           </nav>
            
            <form action="" method="POST">
               <div class="signup-form bg-dark">

            <div class="Signup-head bg-warning">
                <h1>Reserve Your Ticket</h1>
            </div>

           

            <div class="signup-content2">
                <input type="text" placeholder="From" name="from" class="input bg-dark">
                <input type="text" placeholder="To" name="to" class="input bg-dark"><br>
            

            <label class="text-white" style="margin-left:10px;">Depart</label>
            <input type="date" class="tarikh bg-dark text-white">
            <label class="text-white" style="margin-left:10px;">Return</label>
            <input type="date" class="tarikh bg-dark">

            <input type="number" class="bg-dark person" placeholder="Adults">
            <input type="number" class="bg-dark person" placeholder="Children"><br>

            <label class="text-white travel">Travel Class</label>
            <select class="bg-dark text-white travel2">
                <option></option>
                <option>First Class/1A</option>
                <option>AC 2tier/2A</option>
                <option>AC 3tier/3A</option>
                <option>Executive class chair car/Economy Class</option>
                <option>AC Chair Car</option>
                <option>Sleeper Class</option>
                <option>Second Class</option>
                <option>General</option>
            </select>

            <input type="submit" value="Check Availability" name="submit" class="submit-btn bg-warning">
        </div>
        </div>
                
            </form>
     
           
           
            

            
        </div>
        
    </div>

       <?php
        if(isset($_POST['submit']))
            {
                $from= $_POST['from'];
                $to = $_POST['to'];
               
                echo $from;
                echo $to;
                        echo "<script>window.location='userbookdetails.php?from=".$from."&to=".$to."';</script>";
            }
        else{
            echo "something went wrong";
            }
        ?>
   
         
            
            
            
        </section>
        
        
      
        
        
        
        
        
    </body>
  
   </html>           
   