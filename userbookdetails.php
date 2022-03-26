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
       <link rel="stylesheet" href="userbookdetails.css">
       
    </head>
    <body>
        
         <?php

            $db = mysqli_connect("localhost","root","","railway");
            if(!$db)
            {
                die("Connection failed: " . mysqli_connect_error());
            }

        ?>
        
        
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
            
            
         <div  class="center-div">
                
          
                <div class="table-responsive">
                    <table>
                        <thead>
                    <tr>
                   <th>Train NO</th>
                   <th>Train Name</th>
                   <th>From</th>
                   <th>To</th>
                   <th>No of Stations</th>
                   <th>distance</th>
                   <th>Tickets Available</th>
                    </tr>
                        </thead>
                       
                        
                        <?php
                        
                

                $from = $_REQUEST["from"];
                $to = $_REQUEST["to"];
                $records = mysqli_query($db,"select * from trains where fromCity='".$from."' and toCity ='".$to."'");

                while($data = mysqli_fetch_array($records))
                {
                ?>
                  <tr>
                    <td><?php echo $data['train_no']; ?></td>
                    <td><?php echo $data['train_name']; ?></td>
                    <td><?php echo $data['fromCity']; ?></td>
                    <td><?php echo $data['toCity']; ?></td>
                    <td><?php echo $data['no_of_station']; ?></td>
                    <td><?php echo $data['duration']; ?></td>
                    <td><?php echo $data['Tickets Available']; ?></td>
                    
                  </tr>	
                <?php
                }
                ?>
                </table>

                <?php mysqli_close($db);?>

                        
                     </table>
                </div>
            </div>
            <form action="" method="POST">
                <div class="trans "style="">
                    
                    <h1>Passenger's Details and Address</h1>
                    <div class="details" style="margin-left: -758px;margin-top: 15px;" >
                        <b> Passenger name:<br>
                      <input type="text" name="pname">
                      <br>
                      Age:<br>
                      <input type="text" name="age">
                      
                      <br>
                      Mobile:<br>
                      <input type="text" name="mobile">
                      
                       <br>
                      Gender:<br>
                      <input type="text" name="gender">
                      
                       <br>
                      Country:<br>
                      <input type="text" name="country">
                      
                       <br>
                      Preference:<br>
                      <input type="text" name="preference">
                      <br>
                      <br>
                      <button name="submit" type="submit" style="margin-top:-25px;"> Continue Payment</button>
                    </div>
                    
            
                    <div class="details" style="margin-left: px;margin-top: -240px;" >
                        
                    Passenger Address:<br>
                      <input type="text" name="caddress">
                      <br>
                      
                       State:<br>
                      <input type="text" name="state">
                      <br>
                      
                      City:<br>
                      <input type="text" name="city">
                      <br>
                      Postoffice:<br>
                      <input type="text" name="post">
                      
                       <br>
                      Pincode:<br>
                      <input type="text" name="pincode">
                      
                       
                      <br>
                      
                      
                      
                    </div>
                      
                    <div class="logo"style="margin: -210px 730px; ">
                        <img src="img/logo.png" alt="Italian Trulli" style="width:150px;height:150px;" >
                    </div>
                    
                </div>
                
                
                
                
            </form>
            
            
            
            
            
        </section>
        
     
        <?php
            function setData($pname,$age,$mobile,$gender,$country,$preference,$caddress,$state,$city,$post,$pincode){
                $db = mysqli_connect("localhost","root","","railway");
                        
                if(!$db)
                {
                 die("Connection failed: " . mysqli_connect_error());
                }
                
                $setDataQuery = "insert into booking values('".$pname."',".$age.",".$mobile.",'".$gender."','".$country."','".$preference."','".$caddress."','".$state."','".$city."','".$post."','".$pincode."');";
                $db->query($setDataQuery);
               
               $payment = "payment.php";
               $self = "_self";
                echo "<script>window.location='payment.php';</script>";
                
            }
          

              
            if(isset($_POST['submit']))
            {
                $pname= $_POST['pname'];
                $age = $_POST['age'];
                 $mobile= $_POST['mobile'];
                $gender = $_POST['gender'];
                 $country= $_POST['country'];
                $preference = $_POST['preference'];
                 $caddress= $_POST['caddress'];
                  $state= $_POST['state'];
                 
                 $city = $_POST['city'];
                 $post= $_POST['post'];
                $pincode = $_POST['pincode'];
                 setData($pname,$age,$mobile,$gender,$country,$preference,$caddress,$state,$city,$post,$pincode);
               
            
            }
               ?>
    
        
    </body>
    
</html>