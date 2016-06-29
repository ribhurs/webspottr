<?php
   
  session_start();
   $text1 = "";
   $text2 = "";
   $email = "";

   if(count($_POST) > 0) {
       $_SESSION['text1'] = $_POST['text1'];
       $_SESSION['text2'] = $_POST['text2'];
       $_SESSION['email'] = $_POST['email'];

       header("HTTP/1.1 303 See Other");
       header("Location: http://$_SERVER[HTTP_HOST]/rental.php");
       die();
   }
   else if (isset($_SESSION['text1']) or isset($_SESSION['text2']) or isset($_SESSION['email']) ){
           $text1 = $_SESSION['text1'];
           $text2 = $_SESSION['text2'];
           $email =  $_SESSION['email'];

           $myfile = fopen("datafile.txt", "a") or die("Unable to open file!"); 
           

           fwrite($myfile,$text1);
           
           fwrite($myfile,"\n");
           
           fwrite($myfile, $text2);
 
           fwrite($myfile,"\n");
   
           fwrite($myfile,$email);
      
           fwrite($myfile,"\n");
       
           fclose($myfile);    

        session_unset();
        session_destroy();
       
        echo'<style>
        .alert{ display: block !important;  }
        </style>';      
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Spottr is a way to discover the best and the latest companies providing everyday services that you can fall in love with.">
    <!--<meta name="author" content="">-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700,300' rel='stylesheet' type='text/css'>
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CODE FOR FACEBOOK OPEN GRAPH-->
    <meta property="og:title" content="Hello, house hunters!" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://spottr.in" />
    <meta property="og:image" content="http://spottr.in/spottr.png" />
    <meta property="og:site_name" content="Spottr" />

    <meta property="og:description" content="Finding the ideal home for rent is difficult. Here's a list to ease your first step of finding the resources to begin your house hunt. Happy hunting!" />

    <title>Spottr</title>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-79507156-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>

<body>


    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WMLNL7"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WMLNL7');

    </script>
    <!-- End Google Tag Manager -->



    <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        <strong>Thank you!</strong> We have received your message.
    </div>

        <nav class="navbar navbar-inverse visible-xs">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h2> <span class="fa fa-puzzle-piece" aria-hidden="true"></span> Spottr.</h2>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                    <a class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                      Rental Accomodation
                    </a>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse in">
                       <div class="panel-body">
                      <ul class="nav navbar-nav">
                          <li><a href="http://www.spottr.in/index.php#companyManagedHouses" data-toggle="collapse" data-target="#myNavbar">Company Managed Houses</a></li>
                          <li><a href="http://www.spottr.in/index.php#companyManagedPGs" data-toggle="collapse" data-target="#myNavbar">Company Managed PGs</a></li>
                          <li><a href="http://www.spottr.in/index.php#chatBased" data-toggle="collapse" data-target="#myNavbar">Chat Based Search</a></li>
                          <li><a href="http://www.spottr.in/index.php#listings" data-toggle="collapse" data-target="#myNavbar">Listings</a></li>
                          <li><a href="http://www.spottr.in/index.php#listingAggregators" data-toggle="collapse" data-target="#myNavbar">Listing Aggregators</a></li>
                          <li><a href="http://www.spottr.in/index.php#brokers" data-toggle="collapse" data-target="#myNavbar">Real Estate Agents</a> </li>
                          <li><a href="http://www.spottr.in/index.php#classifieds" data-toggle="collapse" data-target="#myNavbar">General Classifieds</a></li>
                        </ul>
                      </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    <a class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                      Furniture &amp; Appliances  
                    </a>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                          <li><a class="gotohere1" data-toggle="collapse" data-target="#myNavbar">Furniture</a></li>
                          <li><a class="gotohere2" data-toggle="collapse" data-target="#myNavbar">Appliances</a></li>
                        </ul>
                      </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                    <a class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                     Car/bike Rental
                    </a>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                          <li><a class="gotohere3" data-toggle="collapse" data-target="#myNavbar">Self drive cars</a></li>
                          <li><a class="gotohere4" data-toggle="collapse" data-target="#myNavbar">Local and outstation cabs</a></li>
                          <li><a class="gotohere5" data-toggle="collapse" data-target="#myNavbar">Bikes</a></li> 
                           <li><a class="gotohere6" data-toggle="collapse" data-target="#myNavbar">Corporate car rental</a></li>  
                            <li><a class="gotohere7" data-toggle="collapse" data-target="#myNavbar">Cycles</a></li>     
                        </ul>
                      </div>
                  </div>
                </div>
                
              </div> 
                
              
            </div>
        </div>
    </nav>
    

   <div class="col-sm-3 sidenav hidden-xs">
        <h2><span class="fa fa-puzzle-piece" aria-hidden="true"></span> Spottr.</h2>
        <br>
        
        <br>
         
            <div class="panel-group" id="accordiona">
                <div class="panel panel-default">
                  <div class="panel-heading" data-toggle="collapse" data-parent="#accordiona" href="#collapsea1">
                    <h4 class="panel-title" >
                      Rental Accomodation
                      </h4>
                  </div>
                  <div id="collapsea1" class="panel-collapse collapse in">
                    <div class="panel-body">
                         <ul class="nav nav-pills nav-stacked">
                             <li><a href="http://www.spottr.in/index.php#companyManagedHouses">Company Managed Houses</a></li>
                             <li><a href="http://www.spottr.in/index.php#companyManagedPGs">Company Managed PGs</a></li>
                             <li><a href="http://www.spottr.in/index.php#chatBased">Chat Based Search</a></li>
                             <li><a href="http://www.spottr.in/index.php#listings">Listings</a></li>
                             <li><a href="http://www.spottr.in/index.php#listingAggregators">Listing Aggregators</a></li>
                             <li><a href="http://www.spottr.in/index.php#brokers">Real Estate Agents </a></li>
                             <li><a href="http://www.spottr.in/index.php#classifieds">General Classifieds</a></li>
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" data-toggle="collapse" data-parent="#accordiona" href="#collapsea2">
                    <h4 class="panel-title">
                       Furniture &amp; Appliances  
                    </h4>
                  </div>
                  <div id="collapsea2" class="panel-collapse collapse">
                    <div class="panel-body">
                         <ul class="nav nav-pills nav-stacked">
                          <li><a class="gotohere1" data-toggle="collapse" data-target="#myNavbar">Furniture</a></li>
                          <li><a class="gotohere2" data-toggle="collapse" data-target="#myNavbar">Appliances</a></li>
                        </ul>
                      </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" data-toggle="collapse" data-parent="#accordiona" href="#collapsea3">
                    <h4 class="panel-title">
                     Car/bike Rental
                    </h4>
                  </div>
                  <div id="collapsea3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                             <li><a class="gotohere3" data-toggle="collapse" data-target="#myNavbar">Self drive cars</a></li>
                          <li><a class="gotohere4" data-toggle="collapse" data-target="#myNavbar">Local and outstation cabs</a></li>
                          <li><a class="gotohere5" data-toggle="collapse" data-target="#myNavbar">Bikes</a></li> 
                           <li><a class="gotohere6" data-toggle="collapse" data-target="#myNavbar">Corporate car rental</a></li>  
                            <li><a class="gotohere7" data-toggle="collapse" data-target="#myNavbar">Cycles</a></li>      
                        </ul>
                      </div>
                  </div>
                </div>
              </div>
           

        <br>
        <div class="info">
            <p>&copy; Spottr 2016
            <br>
            <span class="fa fa-envelope-o" aria-hidden="true"></span> one@spottr.in</p>
        </div>
        
    </div>


    <div class="col-sm-9 mainbody">

<!----------------------------  MAIN SECTION ----------------------------------------------->



<?php

/* CONNECT TO DB 
---------------------------------------------------- */
$servername = "localhost";
$username = "root";  //Databaseman
$password = "root"; //T&03,e)~x~2A
$dbname = "CardData"; //kristy
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->connect_error; 
      

/* PARSE THE QUERY STRING, STORE FBID TO DB 
---------------------------------------------------- */   
$querystring =  $_SERVER["QUERY_STRING"];
parse_str($querystring);
$sql = "INSERT INTO facebookid (userid) VALUES (".$fbid.")";
$result = $conn->query($sql);
        
  

        
        

$sql = "SELECT Company, Weblink, Applink, Imagename, City, Categories, Description  FROM Companytable 
WHERE Categories LIKE '%Furniture%';"; 
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
            echo "<div id = 'furniture' class='sectionhead'>&nbspFurniture</div>";
            $firstrun = false;
        }
        
        $x = $x + 1;   
        if($colcount == 4)
          { 
            echo "<div class='row'>";
          }
        
       
         echo "<div class='col-md-4'>
                <div class='card' data-toggle='collapse' data-target='#cardcollapse1".$x."'>
                        <img class='card-img-top cardlogo' src='".$row["Imagename"]."' alt='Card image cap'>
                        <div class='card-block'>
                            <h4 class='card-title'>".$row["Company"]."</h4>
                            <p class='card-text'>".$row["Description"]."</i>
                            </p>";
                   
        echo       "<div class='row buttonsrow'>
                            
                            <a target='_blank' href='".$row["Applink"]."' class='btn btn-success visitappbutton'><span class='fa fa-android' aria-hidden='true'></span></a>
                            
                            <a target='_blank' href='".$row["Weblink"]."' class='btn btn-success visitsitebutton'><span class='fa fa-external-link' aria-hidden='true'></span>&nbsp; visit site</a>
                            
                            
                            </div>
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
        <form action='/rental.php' method='post' role='form'>
            <div class='card-block message'>
                <h4 class='card-title'>Subscribe</h4>
                <div class='card-text message'><br>Other services that you want to see?<br><input type='text' class='form-control' placeholder='eg. beauty services' name='text1' id='text1'>Any service provider whom we missed?<br><input type='text' class='form-control' placeholder='eg. rentallistings.com' name='text2' id='text2'></span></div>
                <div class='row buttonsrow subscribe'>
                    <div class='input-group'><input type='email' class='form-control' placeholder='you@awesome.com' name='email' id='email'><span class='input-group-btn'><button class='btn btn-secondary gobutton' type='submit'>Go!</button></span></div>
                </div>
            </div>
        </form>
    </div>
</div>";  }
echo "</div>";    
    



$sql = "SELECT Company, Weblink, Applink, Imagename, City, Categories, Description  FROM Companytable 
WHERE Categories LIKE '%Home Appliances%';";
 
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
            echo "<div id='appliances' class='sectionhead'>&nbspHome Appliances</div>";
            $firstrun = false;
        }
        
        $x = $x + 1;   
        if($colcount == 4)
          { 
            echo "<div class='row'>";
          }
        
       
         echo "<div class='col-md-4'>
                <div class='card' data-toggle='collapse' data-target='#cardcollapse1".$x."'>
                        <img class='card-img-top cardlogo' src='".$row["Imagename"]."' alt='Card image cap'>
                        <div class='card-block'>
                            <h4 class='card-title'>".$row["Company"]."</h4>
                            <p class='card-text'>".$row["Description"]."</i>
                            </p>";
                   
        echo       "<div class='row buttonsrow'>
                            
                            <a target='_blank' href='".$row["Applink"]."' class='btn btn-success visitappbutton'><span class='fa fa-android' aria-hidden='true'></span></a>
                            
                            <a target='_blank' href='".$row["Weblink"]."' class='btn btn-success visitsitebutton'><span class='fa fa-external-link' aria-hidden='true'></span>&nbsp; visit site</a>
                            
                            
                            </div>
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
        <form action='/rental.php' method='post' role='form'>
            <div class='card-block message'>
                <h4 class='card-title'>Subscribe</h4>
                <div class='card-text message'><br>Other services that you want to see?<br><input type='text' class='form-control' placeholder='eg. beauty services' name='text1' id='text1'>Any service provider whom we missed?<br><input type='text' class='form-control' placeholder='eg. rentallistings.com' name='text2' id='text2'></span></div>
                <div class='row buttonsrow subscribe'>
                    <div class='input-group'><input type='email' class='form-control' placeholder='you@awesome.com' name='email' id='email'><span class='input-group-btn'><button class='btn btn-secondary gobutton' type='submit'>Go!</button></span></div>
                </div>
            </div>
        </form>
    </div>
</div>";  }
echo "</div>";  
 

$sql = "SELECT Company, Weblink, Applink, Imagename, City, Categories, Description  FROM Companytable 
WHERE Categories LIKE '%Home Appliances%';";
 
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
            echo "<div class='sectionhead'>&nbspHome Appliances</div>";
            $firstrun = false;
        }
        
        $x = $x + 1;   
        if($colcount == 4)
          { 
            echo "<div class='row'>";
          }
        
       
         echo "<div class='col-md-4'>
                <div class='card' data-toggle='collapse' data-target='#cardcollapse1".$x."'>
                        <img class='card-img-top cardlogo' src='".$row["Imagename"]."' alt='Card image cap'>
                        <div class='card-block'>
                            <h4 class='card-title'>".$row["Company"]."</h4>
                            <p class='card-text'>".$row["Description"]."</i>
                            </p>";
                   
        echo       "<div class='row buttonsrow'>
                            
                            <a target='_blank' href='".$row["Applink"]."' class='btn btn-success visitappbutton'><span class='fa fa-android' aria-hidden='true'></span></a>
                            
                            <a target='_blank' href='".$row["Weblink"]."' class='btn btn-success visitsitebutton'><span class='fa fa-external-link' aria-hidden='true'></span>&nbsp; visit site</a>
                            
                            
                            </div>
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
        <form action='/rental.php' method='post' role='form'>
            <div class='card-block message'>
                <h4 class='card-title'>Subscribe</h4>
                <div class='card-text message'><br>Other services that you want to see?<br><input type='text' class='form-control' placeholder='eg. beauty services' name='text1' id='text1'>Any service provider whom we missed?<br><input type='text' class='form-control' placeholder='eg. rentallistings.com' name='text2' id='text2'></span></div>
                <div class='row buttonsrow subscribe'>
                    <div class='input-group'><input type='email' class='form-control' placeholder='you@awesome.com' name='email' id='email'><span class='input-group-btn'><button class='btn btn-secondary gobutton' type='submit'>Go!</button></span></div>
                </div>
            </div>
        </form>
    </div>
</div>";  }
echo "</div>";          




        
$sql = "SELECT Company, Weblink, Applink, Imagename, City, Categories, Description  FROM Companytable 
WHERE Categories LIKE '%Self drive cars%';";
 
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
            echo "<div id='selfdrivecars' class='sectionhead'>&nbspSelf drive cars</div>";
            $firstrun = false;
        }
        
        $x = $x + 1;   
        if($colcount == 4)
          { 
            echo "<div class='row'>";
          }
        
       
         echo "<div class='col-md-4'>
                <div class='card' data-toggle='collapse' data-target='#cardcollapse1".$x."'>
                        <img class='card-img-top cardlogo' src='".$row["Imagename"]."' alt='Card image cap'>
                        <div class='card-block'>
                            <h4 class='card-title'>".$row["Company"]."</h4>
                            <p class='card-text'>".$row["Description"]."</i>
                            </p>";
                   
        echo       "<div class='row buttonsrow'>
                            
                            <a target='_blank' href='".$row["Applink"]."' class='btn btn-success visitappbutton'><span class='fa fa-android' aria-hidden='true'></span></a>
                            
                            <a target='_blank' href='".$row["Weblink"]."' class='btn btn-success visitsitebutton'><span class='fa fa-external-link' aria-hidden='true'></span>&nbsp; visit site</a>
                            
                            
                            </div>
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
        <form action='/rental.php' method='post' role='form'>
            <div class='card-block message'>
                <h4 class='card-title'>Subscribe</h4>
                <div class='card-text message'>  <br>Other services that you want to see?<br><input type='text' class='form-control' placeholder='eg. beauty services' name='text1' id='text1'>Any service provider whom we missed?<br><input type='text' class='form-control' placeholder='eg. rentallistings.com' name='text2' id='text2'></span></div>
                <div class='row buttonsrow subscribe'>
                    <div class='input-group'><input type='email' class='form-control' placeholder='you@awesome.com' name='email' id='email'><span class='input-group-btn'><button class='btn btn-secondary gobutton' type='submit'>Go!</button></span></div>
                </div>
            </div>
        </form>
    </div>
</div>";  }
echo "</div>";  

        
$sql = "SELECT Company, Weblink, Applink, Imagename, City, Categories, Description  FROM Companytable 
WHERE Categories LIKE '%Local and outstation cabs%';";
 
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
            echo "<div id='localandoutstationcabs' class='sectionhead'>&nbspLocal and outstation cabs</div>";
            $firstrun = false;
        }
        
        $x = $x + 1;   
        if($colcount == 4)
          { 
            echo "<div class='row'>";
          }
        
       
         echo "<div class='col-md-4'>
                <div class='card' data-toggle='collapse' data-target='#cardcollapse1".$x."'>
                        <img class='card-img-top cardlogo' src='".$row["Imagename"]."' alt='Card image cap'>
                        <div class='card-block'>
                            <h4 class='card-title'>".$row["Company"]."</h4>
                            <p class='card-text'>".$row["Description"]."</i>
                            </p>";
                   
        echo       "<div class='row buttonsrow'>
                            
                            <a target='_blank' href='".$row["Applink"]."' class='btn btn-success visitappbutton'><span class='fa fa-android' aria-hidden='true'></span></a>
                            
                            <a target='_blank' href='".$row["Weblink"]."' class='btn btn-success visitsitebutton'><span class='fa fa-external-link' aria-hidden='true'></span>&nbsp; visit site</a>
                            
                            
                            </div>
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
        <form action='/rental.php' method='post' role='form'>
            <div class='card-block message'>
                <h4 class='card-title'>Subscribe</h4>
                <div class='card-text message'>  <br>Other services that you want to see?<br><input type='text' class='form-control' placeholder='eg. beauty services' name='text1' id='text1'>Any service provider whom we missed?<br><input type='text' class='form-control' placeholder='eg. rentallistings.com' name='text2' id='text2'></span></div>
                <div class='row buttonsrow subscribe'>
                    <div class='input-group'><input type='email' class='form-control' placeholder='you@awesome.com' name='email' id='email'><span class='input-group-btn'><button class='btn btn-secondary gobutton' type='submit'>Go!</button></span></div>
                </div>
            </div>
        </form>
    </div>
</div>";  }
echo "</div>";    
        
        
        
$sql = "SELECT Company, Weblink, Applink, Imagename, City, Categories, Description  FROM Companytable 
WHERE Categories LIKE '%Bikes%';";
 
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
            echo "<div id='bikes' class='sectionhead'>&nbspBikes</div>";
            $firstrun = false;
        }
        
        $x = $x + 1;   
        if($colcount == 4)
          { 
            echo "<div class='row'>";
          }
        
       
         echo "<div class='col-md-4'>
                <div class='card' data-toggle='collapse' data-target='#cardcollapse1".$x."'>
                        <img class='card-img-top cardlogo' src='".$row["Imagename"]."' alt='Card image cap'>
                        <div class='card-block'>
                            <h4 class='card-title'>".$row["Company"]."</h4>
                            <p class='card-text'>".$row["Description"]."</i>
                            </p>";
                   
        echo       "<div class='row buttonsrow'>
                            
                            <a target='_blank' href='".$row["Applink"]."' class='btn btn-success visitappbutton'><span class='fa fa-android' aria-hidden='true'></span></a>
                            
                            <a target='_blank' href='".$row["Weblink"]."' class='btn btn-success visitsitebutton'><span class='fa fa-external-link' aria-hidden='true'></span>&nbsp; visit site</a>
                            
                            
                            </div>
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
        <form action='/rental.php' method='post' role='form'>
            <div class='card-block message'>
                <h4 class='card-title'>Subscribe</h4>
                <div class='card-text message'>  <br>Other services that you want to see?<br><input type='text' class='form-control' placeholder='eg. beauty services' name='text1' id='text1'>Any service provider whom we missed?<br><input type='text' class='form-control' placeholder='eg. rentallistings.com' name='text2' id='text2'></span></div>
                <div class='row buttonsrow subscribe'>
                    <div class='input-group'><input type='email' class='form-control' placeholder='you@awesome.com' name='email' id='email'><span class='input-group-btn'><button class='btn btn-secondary gobutton' type='submit'>Go!</button></span></div>
                </div>
            </div>
        </form>
    </div>
</div>";  }
echo "</div>";            
        
        
        
$sql = "SELECT Company, Weblink, Applink, Imagename, City, Categories, Description  FROM Companytable 
WHERE Categories LIKE '%Corporate car rental%';";
 
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
            echo "<div id='corporatecarrental' class='sectionhead'>&nbspCorporate car rental</div>";
            $firstrun = false;
        }
        
        $x = $x + 1;   
        if($colcount == 4)
          { 
            echo "<div class='row'>";
          }
        
       
         echo "<div class='col-md-4'>
                <div class='card' data-toggle='collapse' data-target='#cardcollapse1".$x."'>
                        <img class='card-img-top cardlogo' src='".$row["Imagename"]."' alt='Card image cap'>
                        <div class='card-block'>
                            <h4 class='card-title'>".$row["Company"]."</h4>
                            <p class='card-text'>".$row["Description"]."</i>
                            </p>";
                   
        echo       "<div class='row buttonsrow'>
                            
                            <a target='_blank' href='".$row["Applink"]."' class='btn btn-success visitappbutton'><span class='fa fa-android' aria-hidden='true'></span></a>
                            
                            <a target='_blank' href='".$row["Weblink"]."' class='btn btn-success visitsitebutton'><span class='fa fa-external-link' aria-hidden='true'></span>&nbsp; visit site</a>
                            
                            
                            </div>
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
        <form action='/rental.php' method='post' role='form'>
            <div class='card-block message'>
                <h4 class='card-title'>Subscribe</h4>
                <div class='card-text message'>  <br>Other services that you want to see?<br><input type='text' class='form-control' placeholder='eg. beauty services' name='text1' id='text1'>Any service provider whom we missed?<br><input type='text' class='form-control' placeholder='eg. rentallistings.com' name='text2' id='text2'></span></div>
                <div class='row buttonsrow subscribe'>
                    <div class='input-group'><input type='email' class='form-control' placeholder='you@awesome.com' name='email' id='email'><span class='input-group-btn'><button class='btn btn-secondary gobutton' type='submit'>Go!</button></span></div>
                </div>
            </div>
        </form>
    </div>
</div>";  }
echo "</div>";          


$sql = "SELECT Company, Weblink, Applink, Imagename, City, Categories, Description  FROM Companytable 
WHERE Categories LIKE '%Cycles%';";
 
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
            echo "<div id='cycles' class='sectionhead'>&nbspCycles</div>";
            $firstrun = false;
        }
        
        $x = $x + 1;   
        if($colcount == 4)
          { 
            echo "<div class='row'>";
          }
        
       
         echo "<div class='col-md-4'>
                <div class='card' data-toggle='collapse' data-target='#cardcollapse1".$x."'>
                        <img class='card-img-top cardlogo' src='".$row["Imagename"]."' alt='Card image cap'>
                        <div class='card-block'>
                            <h4 class='card-title'>".$row["Company"]."</h4>
                            <p class='card-text'>".$row["Description"]."</i>
                            </p>";
                   
        echo       "<div class='row buttonsrow'>
                            
                            <a target='_blank' href='".$row["Applink"]."' class='btn btn-success visitappbutton'><span class='fa fa-android' aria-hidden='true'></span></a>
                            
                            <a target='_blank' href='".$row["Weblink"]."' class='btn btn-success visitsitebutton'><span class='fa fa-external-link' aria-hidden='true'></span>&nbsp; visit site</a>
                            
                            
                            </div>
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
        <form action='/rental.php' method='post' role='form'>
            <div class='card-block message'>
                <h4 class='card-title'>Subscribe</h4>
                <div class='card-text message'>  <br>Other services that you want to see?<br><input type='text' class='form-control' placeholder='eg. beauty services' name='text1' id='text1'>Any service provider whom we missed?<br><input type='text' class='form-control' placeholder='eg. rentallistings.com' name='text2' id='text2'></span></div>
                <div class='row buttonsrow subscribe'>
                    <div class='input-group'><input type='email' class='form-control' placeholder='you@awesome.com' name='email' id='email'><span class='input-group-btn'><button class='btn btn-secondary gobutton' type='submit'>Go!</button></span></div>
                </div>
            </div>
        </form>
    </div>
</div>";  }        
        

    
    

    
$conn->close();
    ?>

            <script>
                /**
                            $(".card").hover(function(){
                                $(this).children("img.cardlogo").css("-webkit-filter", "grayscale(10%)");
                                 $(this).children("img.cardlogo").css("filter", "grayscale(10%)");
                                }, function(){
                                 $(this).children("img.cardlogo").css("-webkit-filter", "grayscale(100%)");
                                 $(this).children("img.cardlogo").css("filter", "grayscale(100%)");
                            });
                            
                         
                         **/

                $(".gotohere1").click(function() {
                    var offset = 5; //Offset of 20px
                    $('html, body').animate({
                        scrollTop: $("#furniture").offset().top + offset
                    }, 2000);
                });
                $(".gotohere2").click(function() {
                    var offset = 5; //Offset of 20px
                    $('html, body').animate({
                        scrollTop: $("#appliances").offset().top + offset
                    }, 2000);
                });
                $(".gotohere3").click(function() {
                    var offset = 5; //Offset of 20px
                    $('html, body').animate({
                        scrollTop: $("#selfdrivecars").offset().top + offset
                    }, 2000);
                });
                $(".gotohere4").click(function() {
                    var offset = 5; //Offset of 20px
                    $('html, body').animate({
                        scrollTop: $("#localandoutstationcabs").offset().top + offset
                    }, 2000);
                });
                $(".gotohere5").click(function() {
                    var offset = 5; //Offset of 20px
                    $('html, body').animate({
                        scrollTop: $("#bikes").offset().top + offset
                    }, 2000);
                });
                $(".gotohere6").click(function() {
                    var offset = 5; //Offset of 20px
                    $('html, body').animate({
                        scrollTop: $("#corporatecarrental").offset().top + offset
                    }, 2000);
                });
                $(".gotohere7").click(function() {
                    var offset = 5; //Offset of 20px
                    $('html, body').animate({
                        scrollTop: $("#cycles").offset().top + offset
                    }, 2000);
                });

                  
            </script>


            <!-- Bootstrap core JavaScript
    ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script>
                window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')

            </script>
            <!-- <script src="../../dist/js/bootstrap.min.js"></script>
    IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
   -->
</body>

</html>
