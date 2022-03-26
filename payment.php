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
       <link rel="stylesheet" href="payment.css">
       
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
            
        
            <!DOCTYPE html>

  
    <div class="container">
      
        <form action="" method="POST">
            <div class="card-details">
        <p>Pay using Credit or Debit card</p>
  
        <div class="card-number">
          <label> Card Number </label>
          <input
            type="text"
            class="card-number-field"
            placeholder="#########" name="cardno"/>
        </div>
        <br />
        <div class="date-number">
          <label> Expiry Date </label>
          <input type="text" class="date-number-field" 
                 placeholder="DDMMYY" name="expdate" />
        </div>
  
        <div class="cvv-number">
          <label> CVV number </label>
          <input type="text" class="cvv-number-field" 
                 placeholder="xxx" name="cvv"/>
        </div>
        <div class="nameholder-number">
          <label> Card Holder name </label>
          <input
            type="text"
            class="card-name-field"
            placeholder="Enter your Name" name="holder"/>
        </div>
        <button type="submit" class="submit-now-btn" name="submit">Pay
        </button>
      </div>
        </form>
      
  
     
     
        
        
        
    </div>
            
        <?php
        function sendPayment( $cno,$expdate,$cvv,$holder){
            $db = mysqli_connect("localhost","root","","railway");

                if(!$db)
                {
                 die("Connection failed: " . mysqli_connect_error());
                }
                
                $setDataQuery = "insert into payment values(".$cno.",".$expdate.",".$cvv.",'".$holder."');";
                $db->query($setDataQuery);
                echo '<script>alert("Seat Booked  Successful!")</script>';
                
                 echo "<script>window.location='index.php';</script>";
        }
            
        if(isset($_POST['submit']))
            {
                $cno= $_POST['cardno'];
                $expdate= $_POST['expdate'];
                $cvv= $_POST['cvv'];
                $holder= $_POST['holder'];
               
                sendPayment( $cno,$expdate,$cvv,$holder);
            }
        else{
           
            }
        ?>
        
            
            
  
</section>
        
        
        
    </body>
</html>