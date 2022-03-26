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
       <link rel="stylesheet" href="viewtrains.css">
       
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
                   <th>Seat Available</th>
                    </tr>
                        </thead>
                       
                        <?php



                $records = mysqli_query($db,"select * from trains  ");

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
            
            
            
            
        </section>
        
        
        
    </body>