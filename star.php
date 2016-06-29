<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700,300' rel='stylesheet' type='text/css'>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Spottr.</div>
        </div>
    </nav>
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Hello, House hunters!</h1>
            <p><span class="jumbotrontext">Finding the ideal home for rent is difficult. <br>
    Rummaging through numerous listing sites, calling up brokers and then going back to those lists hoping to find a better deal. We have been there, done that. Here's a list to ease your first step of finding the resources to begin your house hunt. <br>
    Happy hunting!</span>&nbsp;<i class="fa fa-thumbs-o-up" aria-hidden="true"></i></p>
        </div>
    </div>
    
    <!----------------------------  MAIN SECTION ----------------------------------------------->
    
<div class="container">
                 
<?php
$servername = "localhost";
$username = "Databaseman";
$password = "T&03,e)~x~2A";
$dbname = "kristy101";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else { 
  // echo "Connected successfully"; 
}
    
    

$sql = "SELECT Name, Rating, Category,linedescription, WebLink, Rating, owner, Broker, Verified, ND, Photos, USP, Negatives, AL FROM Kristy WHERE Category='Listings';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
      $x = 0;
      $colcount = 2;
      $firstrun = true;
    
    echo "<div class='row'>";
    while($row = $result->fetch_assoc()) {
        
        if($firstrun)
        {
            echo "<div class='sectionhead'>&nbsp".$row["Category"]."</div>";
            $firstrun = false;
        }
        
        $x = $x + 1;   
        if($colcount == 4)
          { 
            echo "<div class='row'>";
          }
        
       
         echo "<div class='col-md-4'>
                <div class='card' data-toggle='collapse' data-target='#cardcollapse1".$x."'>
                        <div class='ratinglabel label".$row["Rating"]."'>".$row["Rating"]."&nbsp;<i class='fa fa-star' aria-hidden='true'></i></div><img class='card-img-top cardlogo' src='(".$x.").png' alt='Card image cap'>
                        <div class='card-block'>
                            <h4 class='card-title'>".$row["Name"]."</h4>
                            <p class='card-text'>".$row["linedescription"]."</i>
                            </p>
                            <div id='cardcollapse1".$x."' class='collapse'>
                                <div class='card-block extrainfo'><i class='fa fa-user bulletpoint' aria-hidden='true'></i> deal with : Owner<br>
                                <i class='fa fa-user-secret bulletpoint' aria-hidden='true'></i> brokers present : ".$row["Broker"]."<br>
                                <i class='fa fa-check-square-o bulletpoint' aria-hidden='true'></i> verified posts : ".$row["Verified"]."<br>
                                <i class='fa fa-list-alt bulletpoint' aria-hidden='true'></i> neighbourhood details : ".$row["ND"]."<br>
                                <i class='fa fa-camera-retro bulletpoint' aria-hidden='true'></i> property photos : ".$row["Photos"]."<br>";
                               
          if($row["USP"]) 
          { echo "<i class='fa fa-thumbs-o-up bulletpoint' aria-hidden='true'></i>".$row["USP"]."<br>"; }
                                    
        if($row["Negatives"])
        { echo   "<i class='fa fa-thumbs-o-down bulletpoint red' aria-hidden='true'></i> ".$row["Negatives"]; }
        
        echo       "</div>
                         </div>
                            <div class='row buttonsrow'><a class='btn btn-primary downbutton'><i class='fa fa-angle-down' aria-hidden='true'></i></a>
                            <a target='_blank' href='".$row["WebLink"]."' class='btn btn-success visitsitebutton'><i class='fa fa-external-link' aria-hidden='true'></i>&nbsp; visit site</a></div>
                            </div>
                            </div>
                        </div>";
           
           if($colcount == 4)
            {echo "</div>";
            $colcount = 1; }
        $colcount = $colcount + 1;  
     }         
} 
    else {
    echo "0 results".$conn->error;
}
    
if($colcount!=2) 
{ echo "<div class='col-md-4'>
    <div class='card message' data-target='#cardcollapse2016' data-toggle='collapse'>
        <form action='/index.php' method='post' role='form'>
            <div class='card-block message'>
                <h4 class='card-title'>Subscribe</h4>
                <div class='card-text message'> Subscribe to us if you want more such lists.<br> <br><span style='font-size:12px;'>Other services that you want to see?<br><input type='text' class='form-control' placeholder='eg. beauty services' name='text1' id='text1'>Any service provider whom we missed?<br><input type='text' class='form-control' placeholder='eg. rentallistings.com' name='text2' id='text2'>Thank you.</span></div>
                <div class='row buttonsrow'>
                    <div class='input-group'><input type='email' class='form-control' placeholder='you@awesome.com' name='email' id='email'><span class='input-group-btn'><button class='btn btn-secondary gobutton' type='submit'>Go!</button></span></div>
                </div>
            </div>
        </form>
    </div>
</div>";  }
echo "</div>";    
    
    
    
$sql = "SELECT Name, Category,linedescription, WebLink, Rating, owner, Broker, Verified, ND, Photos, USP, Negatives, AL FROM Kristy WHERE Category='Managed';";
$result = $conn->query($sql);   
if ($result->num_rows > 0) {
    // output data of each row
      $x = 0;
      $colcount = 2;
      $firstrun = true;
    
    echo "<div class='row'>";
    while($row = $result->fetch_assoc()) {
        
        if($firstrun)
        {
            echo "<div class='sectionhead'>&nbsp".$row["Category"]."</div>";
            $firstrun = false;
        }
        
        $x = $x + 1;   
        if($colcount == 4)
          { 
            echo "<div class='row'>";
          }
        
       
         echo "<div class='col-md-4'>
                <div class='card' data-toggle='collapse' data-target='#cardcollapse2".$x."'>
                        <div class='ratinglabel label".$row["Rating"]."'>".$row["Rating"]."&nbsp;<i class='fa fa-star' aria-hidden='true'></i></div><img class='card-img-top cardlogo' src='(".$x.").png' alt='Card image cap'>
                        <div class='card-block'>
                            <h4 class='card-title'>".$row["Name"]."</h4>
                            <p class='card-text'>".$row["linedescription"]."</i>
                            </p>
                            <div id='cardcollapse2".$x."' class='collapse'>
                                <div class='card-block extrainfo'><i class='fa fa-user bulletpoint' aria-hidden='true'></i> deal with : Owner<br>
                                <i class='fa fa-user-secret bulletpoint' aria-hidden='true'></i> brokers present : ".$row["Broker"]."<br>
                                <i class='fa fa-check-square-o bulletpoint' aria-hidden='true'></i> verified posts : ".$row["Verified"]."<br>
                                <i class='fa fa-list-alt bulletpoint' aria-hidden='true'></i> neighbourhood details : ".$row["ND"]."<br>
                                <i class='fa fa-camera-retro bulletpoint' aria-hidden='true'></i> property photos : ".$row["Photos"]."<br>";
                               
          if($row["USP"]) 
          { echo "<i class='fa fa-thumbs-o-up bulletpoint' aria-hidden='true'></i>".$row["USP"]."<br>"; }
                                    
        if($row["Negatives"])
        { echo   "<i class='fa fa-thumbs-o-down bulletpoint red' aria-hidden='true'></i> ".$row["Negatives"]; }
        
        echo       "</div>
                         </div>
                            <div class='row buttonsrow'><a class='btn btn-primary downbutton'><i class='fa fa-angle-down' aria-hidden='true'></i></a>
                            <a target='_blank' href='".$row["WebLink"]."' class='btn btn-success visitsitebutton'><i class='fa fa-external-link' aria-hidden='true'></i>&nbsp; visit site</a></div>
                            </div>
                            </div>
                        </div>";
           
           if($colcount == 4)
            {echo "</div>";
            $colcount = 1; }
        $colcount = $colcount + 1;  
     }         
} 
    else {
    echo "0 results".$conn->error;
}
if($colcount!=2) 
{ echo "<div class='col-md-4'>
    <div class='card message' data-target='#cardcollapse2016' data-toggle='collapse'>
        <form action='/index.php' method='post' role='form'>
            <div class='card-block message'>
                <h4 class='card-title'>Subscribe</h4>
                <div class='card-text message'> Subscribe to us if you want more such lists.<br> <br><span style='font-size:12px;'>Other services that you want to see?<br><input type='text' class='form-control' placeholder='eg. beauty services' name='text1' id='text1'>Any service provider whom we missed?<br><input type='text' class='form-control' placeholder='eg. rentallistings.com' name='text2' id='text2'>Thank you.</span></div>
                <div class='row buttonsrow'>
                    <div class='input-group'><input type='email' class='form-control' placeholder='you@awesome.com' name='email' id='email'><span class='input-group-btn'><button class='btn btn-secondary gobutton' type='submit'>Go!</button></span></div>
                </div>
            </div>
        </form>
    </div>
</div>";  }
    
echo "</div>";     
 

    
    
$sql = "SELECT Name, Category,linedescription, WebLink, Rating, owner, Broker, Verified, ND, Photos, USP, Negatives, AL FROM Kristy WHERE Category='Classifieds';"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
      $x = 0;
      $colcount = 2;
      $firstrun = true;
    
    echo "<div class='row'>";
    while($row = $result->fetch_assoc()) {
        
        if($firstrun)
        {
            echo "<div class='sectionhead'>&nbsp".$row["Category"]."</div>";
            $firstrun = false;
        }
        
        $x = $x + 1;   
        if($colcount == 4)
          { 
            echo "<div class='row'>";
          }
        
       
         echo "<div class='col-md-4'>
                <div class='card' data-toggle='collapse' data-target='#cardcollapse3".$x."'>
                        <div class='ratinglabel label".$row["Rating"]."'>".$row["Rating"]."&nbsp;<i class='fa fa-star' aria-hidden='true'></i></div><img class='card-img-top cardlogo' src='(".$x.").png' alt='Card image cap'>
                        <div class='card-block'>
                            <h4 class='card-title'>".$row["Name"]."</h4>
                            <p class='card-text'>".$row["linedescription"]."</i>
                            </p>
                            <div id='cardcollapse3".$x."' class='collapse'>
                                <div class='card-block extrainfo'><i class='fa fa-user bulletpoint' aria-hidden='true'></i> deal with : Owner<br>
                                <i class='fa fa-user-secret bulletpoint' aria-hidden='true'></i> brokers present : ".$row["Broker"]."<br>
                                <i class='fa fa-check-square-o bulletpoint' aria-hidden='true'></i> verified posts : ".$row["Verified"]."<br>
                                <i class='fa fa-list-alt bulletpoint' aria-hidden='true'></i> neighbourhood details : ".$row["ND"]."<br>
                                <i class='fa fa-camera-retro bulletpoint' aria-hidden='true'></i> property photos : ".$row["Photos"]."<br>";
                               
          if($row["USP"]) 
          { echo "<i class='fa fa-thumbs-o-up bulletpoint' aria-hidden='true'></i>".$row["USP"]."<br>"; }
                                    
        if($row["Negatives"])
        { echo   "<i class='fa fa-thumbs-o-down bulletpoint red' aria-hidden='true'></i> ".$row["Negatives"]; }
        
        echo       "</div>
                         </div>
                            <div class='row buttonsrow'><a class='btn btn-primary downbutton'><i class='fa fa-angle-down' aria-hidden='true'></i></a>
                            <a target='_blank' href='".$row["WebLink"]."' class='btn btn-success visitsitebutton'><i class='fa fa-external-link' aria-hidden='true'></i>&nbsp; visit site</a></div>
                            </div>
                            </div>
                        </div>";
           
           if($colcount == 4)
            {echo "</div>";
            $colcount = 1; }
        $colcount = $colcount + 1;  
     }         
} 
    else {
    echo "0 results".$conn->error;
}   
if($colcount!=2) 
{ echo "<div class='col-md-4'>
    <div class='card message' data-target='#cardcollapse2016' data-toggle='collapse'>
        <form action='/index.php' method='post' role='form'>
            <div class='card-block message'>
                <h4 class='card-title'>Subscribe</h4>
                <div class='card-text message'> Subscribe to us if you want more such lists.<br> <br><span style='font-size:12px;'>Other services that you want to see?<br><input type='text' class='form-control' placeholder='eg. beauty services' name='text1' id='text1'>Any service provider whom we missed?<br><input type='text' class='form-control' placeholder='eg. rentallistings.com' name='text2' id='text2'>Thank you.</span></div>
                <div class='row buttonsrow'>
                    <div class='input-group'><input type='email' class='form-control' placeholder='you@awesome.com' name='email' id='email'><span class='input-group-btn'><button class='btn btn-secondary gobutton' type='submit'>Go!</button></span></div>
                </div>
            </div>
        </form>
    </div>
</div>";  }    

echo "</div>"; 
    
$sql = "SELECT Name, Category,linedescription, WebLink, Rating, owner, Broker, Verified, ND, Photos, USP, Negatives, AL FROM Kristy WHERE Category='Other';";
$result = $conn->query($sql);  
if ($result->num_rows > 0) {
    // output data of each row
      $x = 0;
      $colcount = 2;
      $firstrun = true;
    
    echo "<div class='row'>";
    while($row = $result->fetch_assoc()) {
        
        if($firstrun)
        {
            echo "<div class='sectionhead'>&nbsp".$row["Category"]."</div>";
            $firstrun = false;
        }
        
        $x = $x + 1;   
        if($colcount == 4)
          { 
            echo "<div class='row'>";
          }
        
       
         echo "<div class='col-md-4'>
                <div class='card' data-toggle='collapse' data-target='#cardcollapse4".$x."'>
                        <div class='ratinglabel label".$row["Rating"]."'>".$row["Rating"]."&nbsp;<i class='fa fa-star' aria-hidden='true'></i></div><img class='card-img-top cardlogo' src='(".$x.").png' alt='Card image cap'>
                        <div class='card-block'>
                            <h4 class='card-title'>".$row["Name"]."</h4>
                            <p class='card-text'>".$row["linedescription"]."</i>
                            </p>
                            <div id='cardcollapse4".$x."' class='collapse'>
                                <div class='card-block extrainfo'><i class='fa fa-user bulletpoint' aria-hidden='true'></i> deal with : Owner<br>
                                <i class='fa fa-user-secret bulletpoint' aria-hidden='true'></i> brokers present : ".$row["Broker"]."<br>
                                <i class='fa fa-check-square-o bulletpoint' aria-hidden='true'></i> verified posts : ".$row["Verified"]."<br>
                                <i class='fa fa-list-alt bulletpoint' aria-hidden='true'></i> neighbourhood details : ".$row["ND"]."<br>
                                <i class='fa fa-camera-retro bulletpoint' aria-hidden='true'></i> property photos : ".$row["Photos"]."<br>";
                               
          if($row["USP"]) 
          { echo "<i class='fa fa-thumbs-o-up bulletpoint' aria-hidden='true'></i>".$row["USP"]."<br>"; }
                                    
        if($row["Negatives"])
        { echo   "<i class='fa fa-thumbs-o-down bulletpoint red' aria-hidden='true'></i> ".$row["Negatives"]; }
        
        echo       "</div>
                         </div>
                            <div class='row buttonsrow'><a class='btn btn-primary downbutton'><i class='fa fa-angle-down' aria-hidden='true'></i></a>
                            <a target='_blank' href='".$row["WebLink"]."' class='btn btn-success visitsitebutton'><i class='fa fa-external-link' aria-hidden='true'></i>&nbsp; visit site</a></div>
                            </div>
                            </div>
                        </div>";
           
           if($colcount == 4)
            {echo "</div>";
            $colcount = 1; }
        $colcount = $colcount + 1;  
     }         
} 
    else {
    echo "0 results".$conn->error;
} 
    
if($colcount!=2) 
{ echo "<div class='col-md-4'>
    <div class='card message' data-target='#cardcollapse2016' data-toggle='collapse'>
        <form action='/index.php' method='post' role='form'>
            <div class='card-block message'>
                <h4 class='card-title'>Subscribe</h4>
                <div class='card-text message'> Subscribe to us if you want more such lists.<br> <br><span style='font-size:12px;'>Other services that you want to see?<br><input type='text' class='form-control' placeholder='eg. beauty services' name='text1' id='text1'>Any service provider whom we missed?<br><input type='text' class='form-control' placeholder='eg. rentallistings.com' name='text2' id='text2'>Thank you.</span></div>
                <div class='row buttonsrow'>
                    <div class='input-group'><input type='email' class='form-control' placeholder='you@awesome.com' name='email' id='email'><span class='input-group-btn'><button class='btn btn-secondary gobutton' type='submit'>Go!</button></span></div>
                </div>
            </div>
        </form>
    </div>
</div>";  }    
    
    
echo "</div></div><div class='footer' style='margin: 30px 0px -35px 0px;'>
            <p>&copy; Spottr 2016 <br>
                <i class='fa fa-envelope-o' aria-hidden='true'></i> hellospottr@gmail.com</p>
        </div>
</body>";  
    
$conn->close();
    ?>  
   
       