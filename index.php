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
       header("Location: http://$_SERVER[HTTP_HOST]/index.php");
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
        <link href="https://fonts.googleapis.com/css?family=Abel|EB+Garamond|Exo|Josefin+Sans|Lato|Lobster|Montserrat|Oswald|PT+Sans|Poiret+One|Quicksand|Raleway|Roboto|Roboto+Condensed|Source+Sans+Pro|Ubuntu|Varela+Round" rel="stylesheet">
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
        <link rel="canonical" href="www.spottr.in" />

        <!-- CODE FOR FACEBOOK OPEN GRAPH-->
        <meta property="og:title" content="Hello, Spottrs!" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://spottr.in" />
        <meta property="og:image" content="http://spottr.in/spottr.png" />
        <meta property="og:site_name" content="Spottr" />

        <meta property="og:description" content="Spottr is a way to discover the best and the latest companies providing everyday services that you can fall in love with. Happy spotting!" />

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
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-WMLNL7');</script>
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
                          <li><a class="gotohere1" data-toggle="collapse" data-target="#myNavbar">Company Managed Houses</a></li>
                          <li><a class="gotohere2" data-toggle="collapse" data-target="#myNavbar">Company Managed PGs</a></li>
                          <li><a class="gotohere3" data-toggle="collapse" data-target="#myNavbar">Chat Based Search</a></li>
                          <li><a class="gotohere4" data-toggle="collapse" data-target="#myNavbar">Listings</a></li>
                          <li><a class="gotohere5" data-toggle="collapse" data-target="#myNavbar">Listing Aggregators</a></li>
                          <li><a class="gotohere6" data-toggle="collapse" data-target="#myNavbar">Real Estate Agents</a> </li>
                          <li><a class="gotohere7" data-toggle="collapse" data-target="#myNavbar">General Classifieds</a></li>
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
                             <li><a href="http://www.spottr.in/rental.php#furniture" data-toggle="collapse" data-target="#myNavbar">Furniture</a></li>
                          <li><a href="http://www.spottr.in/rental.php#appliances" data-toggle="collapse" data-target="#myNavbar">Appliances</a></li>
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
                          <li><a href="http://www.spottr.in/rental.php#selfdrivecars" data-toggle="collapse" data-target="#myNavbar">Self drive cars</a></li>
                          <li><a href="http://www.spottr.in/rental.php#localandoutstationcabs" data-toggle="collapse" data-target="#myNavbar">Local and outstation cabs</a></li>
                          <li><a href="http://www.spottr.in/rental.php#bikes" data-toggle="collapse" data-target="#myNavbar">Bikes</a></li> 
                           <li><a href="http://www.spottr.in/rental.php#corporatecarrental" data-toggle="collapse" data-target="#myNavbar">Corporate car rental</a></li>  
                            <li><a href="http://www.spottr.in/rental.php#cycles" data-toggle="collapse" data-target="#myNavbar">Cycles</a></li>    
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
       
        <!--<div class="dropdown">
          <button class="dropbtn">Bangalore <span class="fa fa-angle-down" aria-hidden="true"></button>
          <div class="dropdown-content">
            <a href="#">Mumbai</a>
            <a href="#">Delhi NCR</a>
            <a href="#">Pune</a>
          </div>
        </div>
        <br>-->
        <br>
        <br>
         
            <div class="panel-group" id="accordiona">
                <div class="panel panel-default">
                  <div class="panel-heading" data-toggle="collapse" data-parent="#accordiona" href="#collapsea1">
                    <h4 class="panel-title">
                      Rental Accomodation
                    </h4>
                  </div>
                  <div id="collapsea1" class="panel-collapse collapse in">
                    <div class="panel-body">
                         <ul class="nav nav-pills nav-stacked">
                             <li><a class="gotohere1">Company Managed Houses</a></li>
                             <li><a class="gotohere2">Company Managed PGs</a></li>
                             <li><a class="gotohere3">Chat Based Search</a></li>
                             <li><a class="gotohere4">Listings</a></li>
                             <li><a class="gotohere5">Listing Aggregators</a></li>
                             <li><a class="gotohere6">Real Estate Agents </a></li>
                             <li><a class="gotohere7">General Classifieds</a></li>
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
                           <li><a href="http://www.spottr.in/rental.php#furniture" data-toggle="collapse" data-target="#myNavbar">Furniture</a></li>
                          <li><a href="http://www.spottr.in/rental.php#appliances" data-toggle="collapse" data-target="#myNavbar">Appliances</a></li>
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
                             <li><a href="http://www.spottr.in/rental.php#selfdrivecars" data-toggle="collapse" data-target="#myNavbar">Self drive cars</a></li>
                          <li><a href="http://www.spottr.in/rental.php#localandoutstationcabs" data-toggle="collapse" data-target="#myNavbar">Local and outstation cabs</a></li>
                          <li><a href="http://www.spottr.in/rental.php#bikes" data-toggle="collapse" data-target="#myNavbar">Bikes</a></li> 
                           <li><a href="http://www.spottr.in/rental.php#corporatecarrental" data-toggle="collapse" data-target="#myNavbar">Corporate car rental</a></li>  
                            <li><a href="http://www.spottr.in/rental.php#cycles" data-toggle="collapse" data-target="#myNavbar">Cycles</a></li>      
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




        <div class="well" id="companyManagedHouses">
            <h4>Hello, Spottrs!</h4>
            <p><span class="jumbotrontext">Spottr is a way to discover the best and the latest companies providing everyday services that you can fall in love with. 
                <br>
                <br>
                What do we do when we want to buy or rent something online? 
We have all been there - rummaging through numerous listing sites, checking up categories and then going back to google hoping to hunt down another site with a better deal.  Hence, we've spotted a list of interesting companies to ease your hunt. <br>
                <br>Happy spotting!</span>&nbsp;<span class="fa fa-thumbs-o-up" aria-hidden="true"></span></p>
        </div>


        <div class="sectionhead" >
            Company Managed Houses
        </div>

   
          <div class="row">
                <div class="col-md-4">
                    <div class="card" data-toggle="collapse" data-target="#cardcollapse101">
                        
                        <img class="card-img-top cardlogo" src="(11).png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Grabhouse</h4>
                            <p class="card-text">Has listings for houses, PGs. Also has listings from people looking for flatmates
                            </p>
                            <div id="cardcollapse101" class="collapse">
                                <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                    <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                    <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                    <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : Yes
                                    <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                    <br><span class="fa fa-thumbs-o-up bulletpoint " aria-hidden="true"></span>Can get a loan for security deposit payments, through Kountmoney
                                    <br>
                                </div>
                            </div>
                            <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://grabhouse.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" data-toggle="collapse" data-target="#cardcollapse7">
                        <img class="card-img-top cardlogo" src="(40).png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Zenify</h4>
                            <p class="card-text">Company managed residential ready to move in homes
                            </p>
                            <div id="cardcollapse7" class="collapse">
                                <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Company
                                    <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                    <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : Yes
                                    <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : Yes
                                    <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                    <br><span class="fa fa-thumbs-o-down bulletpoint red" aria-hidden="true"></span>Book and pay token amount before house visits</div>
                            </div>
                            <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://www.zenify.in/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                        </div>
                    </div>
                </div>
            <div class="col-md-4">
                    <div class="card" data-toggle="collapse" data-target="#cardcollapse50">
                        <img class="card-img-top cardlogo" src="(50).png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">SimplyMoveIn</h4>
                            <p class="card-text">Company managed fully furnished flats, apartments, houses, villas
                            </p>
                            <div id="cardcollapse50" class="collapse">
                                <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Company
                                    <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                    <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : Yes
                                    <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : No
                                    <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                    <br><span class="fa fa-thumbs-o-up bulletpoint" aria-hidden="true"></span> no brokerage, security deposit, basic services included in monthly rent
                            </div>
                    </div>
                            <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://www.simplymovein.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" data-toggle="collapse" data-target="#cardcollapse111">
                        <img class="card-img-top cardlogo" src="(31).png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">RentMyStay</h4>
                            <p class="card-text">Fully furnished homes with flexible rental plans - from a week to 11 months
                            </p>
                            <div id="cardcollapse111" class="collapse">
                                <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Company
                                    <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                    <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : Yes
                                    <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : Yes
                                    <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                    <br><span class="fa fa-thumbs-o-up bulletpoint " aria-hidden="true"></span>Flexi Rentals(Rent for any duration, no lockin periods)
                                    <br>
                                </div>
                            </div>
                            <div class="row buttonsrow">
                                    <a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.tcp.rentmystay" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" target="_blank" href="http://www.rentmystay.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                        </div>
                    </div>
                </div>
           
                <div class="col-md-4">
                    <div class="card" data-toggle="collapse" data-target="#cardcollapse114">
                        <img class="card-img-top cardlogo" src="(27).png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Pinclick</h4>
                            <p class="card-text">Shared accomodation as well as fully furnished homes for bachelors and families.
                            <div id="cardcollapse114" class="collapse">
                                <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Company
                                    <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                    <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : Yes
                                    <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : Yes
                                    <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos :Some
                                    <br>
                                </div>
                            </div>
                            <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" target="_blank" href="http://www.pinclick.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" data-toggle="collapse" data-target="#cardcollapse116">
                       <img class="card-img-top cardlogo" src="(13).png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Homigo</h4>
                            <p class="card-text">Offers fully furnished houses for sharing and Homigo managed non-sharing houses. Has exclusive offers from partner brands like Petoo, MebelKart.
                            </p>
                            <div id="cardcollapse116" class="collapse">
                                <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Company
                                    <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                    <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : Yes
                                    <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                    <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                    <br><span class="fa fa-thumbs-o-up bulletpoint " aria-hidden="true"></span>Provides personalized suggestions based on daily commute time, and distance
                                    <br>
                                </div>
                            </div>
                            <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" target="_blank" href="http://homigo.in/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-4">
                    <div class="card" data-toggle="collapse" data-target="#cardcollapse21">
                      <img class="card-img-top cardlogo" src="(10).png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Gorented</h4>
                            <p class="card-text">Provides managed houses with 3 months' rent as security deposit
                            </p>
                            <div id="cardcollapse21" class="collapse">
                                <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Company
                                    <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                    <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                    <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                    <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : No
                                    <br><span class="fa fa-thumbs-o-up bulletpoint " aria-hidden="true"></span>Provides access to services like house cleaning, cooking
                                    <br><span class="fa fa-thumbs-o-down bulletpoint red" aria-hidden="true"></span> Has to submit requirements</div>
                            </div>
                            <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" target="_blank" href="http://www.gorented.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4" >
                    <div class="card message" data-target="#cardcollapse2016" data-toggle="collapse">
                        <form action="/index.php" method="post" role="form">
                            <div class="card-block message">
                                <h4 class="card-title">Subscribe</h4>
                                <div class="card-text message">
                                    <br>Other services that you want to see?<br><input type="text" class="form-control" placeholder="eg. beauty services" name="text1" id="text1">Any service provider whom we missed?<br><input type="text" class="form-control" placeholder="eg. rentallistings.com" name="text2" id="text2"></div>
                                <div class="row buttonsrow subscribe">
                                    <div class="input-group" id="companyManagedPGs" >
                                        <input type="email" class="form-control" placeholder="you@awesome.com" name="email" id="email"><span class="input-group-btn"><button class="btn btn-secondary gobutton" type="submit">Go!</button></span></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        
        
        
        <div class="sectionhead" >
            Company Managed PGs
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse1">
                    <img class="card-img-top cardlogo" src="(11).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Grabhouse</h4>
                        <p class="card-text">Has listings for houses, PGs. Also has listings from people looking for flatmates
                        </p>
                        <div id="cardcollapse1" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : Yes
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                <br><span class="fa fa-thumbs-o-up bulletpoint " aria-hidden="true"></span>Can get a loan for security deposit payments, through Kountmoney
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://grabhouse.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse9">
                    <img class="card-img-top cardlogo" src="(23).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Nestaway</h4>
                        <p class="card-text">Company managed full furnished shared room/private room/entire house rentals
                        </p>
                        <div id="cardcollapse9" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Company
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : Yes
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.nestaway.customerapp&hl=en" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" target="_blank" href="https://www.nestaway.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse51">
                    <img class="card-img-top cardlogo" src="(50).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">SimplyMoveIn</h4>
                        <p class="card-text">Company managed fully furnished flats, apartments, houses, villas
                        </p>
                        <div id="cardcollapse51" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Company
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : Yes
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : No
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                <br><span class="fa fa-thumbs-o-up bulletpoint" aria-hidden="true"></span> no brokerage, security deposit, basic services included in monthly rent
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://www.simplymovein.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse11">
                    <img class="card-img-top cardlogo" src="(31).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">RentMyStay</h4>
                        <p class="card-text">Fully furnished homes with flexible rental plans- from a week to 11 months
                        </p>
                        <div id="cardcollapse11" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Company
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : Yes
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : Yes
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                <br><span class="fa fa-thumbs-o-up bulletpoint " aria-hidden="true"></span>Flexi Rentals(Rent for any duration, no lockin periods)
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.tcp.rentmystay" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" target="_blank" href="http://www.rentmystay.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse12">
                    <img class="card-img-top cardlogo" src="(8).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Getsethome</h4>
                        <p class="card-text">Furnished, shared houses starting from Rs 5,000. Houses are manged by Getsethomes
                        </p>
                        <div id="cardcollapse12" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Company
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : Yes
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : Yes
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                <br><span class="fa fa-thumbs-o-up bulletpoint " aria-hidden="true"></span>Packages are inclusive of Internet, DTH, Gas, House Keeping, Maintenance and Electricity. Security Deposit is fully refundable
                                <br><span class="fa fa-thumbs-o-down bulletpoint red" aria-hidden="true"></span>Has only a few properties, has restrictions for some properties</div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" target="_blank" href="https://www.getsethome.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse14">
                    <img class="card-img-top cardlogo" src="(27).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Pinclick</h4>
                        <p class="card-text">Shared accomodation as well as fully furnished homes for bachelors and families.
                        </p>
                        <div id="cardcollapse14" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Company
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : Yes
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : Yes
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos :Some
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" target="_blank" href="http://www.pinclick.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse16">
                   <img class="card-img-top cardlogo" src="(13).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Homigo</h4>
                        <p class="card-text">Offers fully furnished houses for sharing and Homigo managed non-sharing houses. Has exclusive offers from partner brands like Petoo, MebelKart.
                        </p>
                        <div id="cardcollapse16" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Company
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : Yes
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                <br><span class="fa fa-thumbs-o-up bulletpoint " aria-hidden="true"></span>Provides personalized suggestions based on daily commute time, and distance
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" target="_blank" href="http://homigo.in/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse17">
                   <img class="card-img-top cardlogo" src="(15).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Jiffy rooms</h4>
                        <p class="card-text">Company managed PG accomodation. Short term accomodation starting at Rs. 199/- per night & Rs. 4000/- on a monthly basis!
                        </p>
                        <div id="cardcollapse17" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Company
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : Yes
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                <br><span class="fa fa-thumbs-o-up bulletpoint " aria-hidden="true"></span> Accomodation available on per night basis too. Food and wifi provided.
                                <br><span class="fa fa-thumbs-o-down bulletpoint red" aria-hidden="true"></span>Not much information provided on the listings. </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" target="_blank" href="http://jiffyrooms.in/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" >
                <div class="card" data-toggle="collapse" data-target="#cardcollapse36">
                   <img class="card-img-top cardlogo" src="(38).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Your Own Room</h4>
                        <p class="card-text">Company managed PG
                        </p>
                        <div id="cardcollapse36" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Company
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : Yes
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : Yes
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow" id="chatBased"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" target="_blank" href="http://www.yourownroom.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="sectionhead" >
            Chat Based Search
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse3">
                    <img class="card-img-top cardlogo" src="(6).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Flatchat</h4>
                        <p class="card-text">Chat directly with landlords, roommates, and tenants
                        </p>
                        <div id="cardcollapse3" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=in.flatchat&hl=en" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" href="http://www.flatchat.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse18">
                   <img class="card-img-top cardlogo" src="(7).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Flatmate.in</h4>
                        <p class="card-text">Find flatmate/roommate using compatibility factors like lifestyle, personality etc.
                        </p>
                        <div id="cardcollapse18" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow" id="listings"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=in.flatmate" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" href="http://flatmate.in/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>

        </div>



        <div class="sectionhead" >
            Listings
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse2">
                    <img class="card-img-top cardlogo" src="(34).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Sulekha Property</h4>
                        <p class="card-text">Listing of rental houses, PGs, hostels. Also has listings by people looking for roomates
                        </p>
                        <div id="cardcollapse2" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos :Some
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.sulekha.property&hl=en" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" href="http://property.sulekha.com/rentals" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse4">
                    <img class="card-img-top cardlogo" src="(19).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">MagicBricks</h4>
                        <p class="card-text">Residential properties for buying and renting. Lisitngs by Owners and agents. 
                        </p>
                        <div id="cardcollapse4" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts :Some
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : Yes
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.timesgroup.magicbricks&hl=en" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" href="http://www.magicbricks.com/property-for-rent/residential-real-estate?proptype=Multistorey-Apartment,Builder-Floor-Apartment,Penthouse,Studio-Apartment,Service-Apartment,Residential-House,Villa&cityName=Bangalore" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse5">
                    <img class="card-img-top cardlogo" src="(5).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Commonfloor</h4>
                        <p class="card-text">Listing for homes to rent and buy
                        </p>
                        <div id="cardcollapse5" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos :Some
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.commonfloor&hl=en" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" href="https://www.commonfloor.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse6">
                    <img class="card-img-top cardlogo" src="(28).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Quikrhomes</h4>
                        <p class="card-text">Houses, apartments and PGs listed by owners and agents
                        </p>
                        <div id="cardcollapse6" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details :Video
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                <br><span class="fa fa-thumbs-o-up bulletpoint " aria-hidden="true"></span>360 view of the neighbourhood
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.quikr&hl=en" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" href="http://www.quikr.com/homes/property/residential-2bhk-for-rent-in-bangalore-cid_23" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse8">
                    <img class="card-img-top cardlogo" src="(25).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Nobroker</h4>
                        <p class="card-text">Houses, PGs and hostels listed by owners and by current tenants looking for flatmates
                        </p>
                        <div id="cardcollapse8" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : No
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : Yes
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                <br><span class="fa fa-thumbs-o-up bulletpoint " aria-hidden="true"></span>Can avail personal assistant for finding house
                                <br><span class="fa fa-thumbs-o-down bulletpoint red" aria-hidden="true"></span>Pay after 10 contacts</div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.nobroker.app&hl=en" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" href="http://www.nobroker.in/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse10">
                    <img class="card-img-top cardlogo" src="(1).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">99acres</h4>
                        <p class="card-text">Listing of rental houses
                        </p>
                        <div id="cardcollapse10" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos :Some
                                <br><span class="fa fa-thumbs-o-up bulletpoint " aria-hidden="true"></span>Shows price trend for a locality
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.nnacres.app&hl=en" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" href="http://www.99acres.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse136">
                    <img class="card-img-top cardlogo" src="(42).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Makaan</h4>
                        <p class="card-text">Residential properties for buying and renting. Lisitngs by Owners and agents. 
                        </p>
                        <div id="cardcollapse136" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br>
                                <span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : Yes
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.makaan&hl=en" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span><a target="_blank" target="_blank" href="https://www.makaan.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse13">
                    <img class="card-img-top cardlogo" src="(26).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">OLX Property</h4>
                        <p class="card-text">Houses and PGs listed by owners and agents.
                        </p>
                        <div id="cardcollapse13" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos :Some
                                <br><span class="fa fa-thumbs-o-down bulletpoint red" aria-hidden="true"></span>No details. Only 1/2 lines and a pic.</div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.olx.southasia&hl=en" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" href="https://www.olx.in/real-estate/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse20">
                  <img class="card-img-top cardlogo" src="(12).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Homeshikari</h4>
                        <p class="card-text">Offers listings for houses in bangalore, part of the ttk group
                        </p>
                        <div id="cardcollapse20" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : Yes
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                <br><span class="fa fa-thumbs-o-up bulletpoint " aria-hidden="true"></span>Has videos for the properties listed
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="http://www.homeshikari.com/rent-property-in-bangalore" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse22">
                  <img class="card-img-top cardlogo" src="(32).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Roomster</h4>
                        <p class="card-text">Platform for finding rental private rooms entire house & flatmates
                        </p>
                        <div id="cardcollapse22" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : Yes
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : Yes
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.roomster&hl=en" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" target="_blank" href="https://www.roomster.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse27">
                   <img class="card-img-top cardlogo" src="(17).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Klick Rentals</h4>
                        <p class="card-text">Property rental advertisements. 
                        </p>
                        <div id="cardcollapse27" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : No
                                <br><span class="fa fa-thumbs-o-down bulletpoint red" aria-hidden="true"></span> Old listings</div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="http://www.klickrentals.com/home/bangalore/1" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse28">
                   <img class="card-img-top cardlogo" src="(9).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Ghara Bari</h4>
                        <p class="card-text">Listings of houses for rent.
                        </p>
                        <div id="cardcollapse28" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos :Some</div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="http://www.gharabari.com/Default.aspx" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse29">
                   <img class="card-img-top cardlogo" src="(33).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Sublet.com</h4>
                        <p class="card-text">Listing of rental houses
                        </p>
                        <div id="cardcollapse29" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts :Some
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos :Some
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://www.sublet.com/state_rentals/india_rentals.asp" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse30">
                   <img class="card-img-top cardlogo" src="(18).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Locanto</h4>
                        <p class="card-text">A classifieds site also containing listings of houses for rent. 
                        </p>
                        <div id="cardcollapse30" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br>
                                <span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos :Some
                                <br><span class="fa fa-thumbs-o-down bulletpoint red" aria-hidden="true"></span>No details. Cannot filter by location on map. </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=de.locanto.app&hl=en" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" href="http://bangalore.locanto.in/Houses-for-Rent/307/?sort=date" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse32">
                   <img class="card-img-top cardlogo" src="(21).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Mondinion</h4>
                        <p class="card-text">An international real estate site with few lisintgs for India
                        </p>
                        <div id="cardcollapse32" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : No
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="http://www.mondinion.com/Properties_for_Rent/location/bangalore/post/1/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse33">
                   <img class="card-img-top cardlogo" src="(22).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Nanubhai property</h4>
                        <p class="card-text">Residential properties listed with a focus on buying and selling. 
                        </p>
                        <div id="cardcollapse33" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Broker
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : No
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : No
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="http://www.nanubhaiproperty.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse35">
                   <img class="card-img-top cardlogo" src="(2).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Abodesindia</h4>
                        <p class="card-text">Residential, commercial and plain land search platform
                        </p>
                        <div id="cardcollapse35" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : No</div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="http://www.abodesindia.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse38">
                   <img class="card-img-top cardlogo" src="(39).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Zamroo</h4>
                        <p class="card-text">Listing of rental houses
                        </p>
                        <div id="cardcollapse38" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos :Some
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.codera.zamroo&hl=en" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" target="_blank" href="http://www.zamroo.com/real-estate/houses-apartments-for-rent/44" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse39">
                   <img class="card-img-top cardlogo" src="(29).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Realestateindia</h4>
                        <p class="card-text">Houses and apartments for rent and sale but with few owner postings. May not be very helpful.
                        </p>
                        <div id="cardcollapse39" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : No
                                <br><span class="fa fa-thumbs-o-down bulletpoint red" aria-hidden="true"></span>Very few posts by owners, old UI</div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" target="_blank" href="http://www.realestateindia.com/search.php?allcategory=5&cityname1=Bangalore&cityname_hidden=1317&min_val=&max_val=&searchlistfor=2" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card message" data-target="#cardcollapse2016" data-toggle="collapse">
                    <form action="/index.php" method="post" role="form">
                        <div class="card-block message">
                            <h4 class="card-title">Subscribe</h4>
                            <div class="card-text message">
                                <br>Other services that you want to see?<br><input type="text" class="form-control" placeholder="eg. beauty services" name="text1" id="text1">Any service provider whom we missed?<br><input type="text" class="form-control" placeholder="eg. rentallistings.com" name="text2" id="text2"></div>
                            <div class="row buttonsrow subscribe" id="listingAggregators">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="you@awesome.com" name="email" id="email"><span class="input-group-btn"><button class="btn btn-secondary gobutton" type="submit">Go!</button></span></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <div class="sectionhead" >
            Listing Aggregators
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse15">
                    <img class="card-img-top cardlogo" src="(24).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Nestoria</h4>
                        <p class="card-text">Search engine for real estate properties
                        </p>
                        <div id="cardcollapse15" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with :
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present :
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts :
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details :
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : No
                                <br><span class="fa fa-thumbs-o-up bulletpoint " aria-hidden="true"></span>Searching rental house listings of CommonFloor, Makaan, NoBroker froma single platform
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="http://www.nestoria.in/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse37">
                   <img class="card-img-top cardlogo" src="(20).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Mitula</h4>
                        <p class="card-text">Aggregates advertisements from other real estate classified sites. 
                        </p>
                        <div id="cardcollapse37" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts :
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details :
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : No
                                <br><span class="fa fa-thumbs-o-down bulletpoint red" aria-hidden="true"></span>Difficult to navigate</div>
                        </div>
                        <div class="row buttonsrow" id="brokers"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" target="_blank" href="http://www.mitula.in" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>

        </div>



        <div class="sectionhead" >
            Real Estate Agents
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse19">
                   <img class="card-img-top cardlogo" src="(16).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">JustDial</h4>
                        <p class="card-text">Lists brokers for rental houses
                        </p>
                        <div id="cardcollapse19" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Real estate agents
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : NA
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : NA
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : NA
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.justdial.search&hl=en" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" href="http://www.justdial.com/Bangalore/Estate-Agents-For-Residential-Rental/ct-315984" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse23">
                  <img class="card-img-top cardlogo" src="(37).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Yellowpages</h4>
                        <p class="card-text">Lists the contacts of house brokers
                        </p>
                        <div id="cardcollapse23" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Real estate agents
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : NA
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : NA
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : NA
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow" id="classifieds"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="http://bangalore.yellowpages.co.in/house+broker" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>

        </div>







        <div class="sectionhead" >
            General Classifieds
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse24">
                  <img class="card-img-top cardlogo" src="(4).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">clickindia</h4>
                        <p class="card-text">Classifieds service
                        </p>
                        <div id="cardcollapse24" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos :Some
                                <br><span class="fa fa-thumbs-o-down bulletpoint red" aria-hidden="true"></span>Outdated User Interface</div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="http://www.clickindia.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse25">
                   <img class="card-img-top cardlogo" src="(35).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Tixuz</h4>
                        <p class="card-text">Has a few advertisements about houses for rent. 
                        </p>
                        <div id="cardcollapse25" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : No
                                <br><span class="fa fa-thumbs-o-down bulletpoint red" aria-hidden="true"></span>Old listings not removed</div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="http://in.tixuz.com/real-estate" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse26">
                   <img class="card-img-top cardlogo" src="(14).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Indiaproperty</h4>
                        <p class="card-text">All kinds of residential and commercial properties listed for sale and rent, with more focus on buying and selling.
                        </p>
                        <div id="cardcollapse26" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos : No</div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="https://play.google.com/store/apps/details?id=com.indiaproperty&hl=en" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a><a target="_blank" href="http://www.indiaproperty.com/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse31">
                   <img class="card-img-top cardlogo" src="(36).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Trovit</h4>
                        <p class="card-text">Advertisement portal for renting and selling properties
                        </p>
                        <div id="cardcollapse31" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos :Some
                                <br><span class="fa fa-thumbs-o-up bulletpoint " aria-hidden="true"></span>Listings are from other house rental websites
                                <br>
                            </div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="http://www.trovit.co.in/" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse34">
                   <img class="card-img-top cardlogo" src="(3).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Bisell</h4>
                        <p class="card-text">Classifieds platform
                        </p>
                        <div id="cardcollapse34" class="collapse">
                            <div class="card-block extrainfo"><span class="fa fa-user bulletpoint" aria-hidden="true"></span> deal with : Owner
                                <br><span class="fa fa-user-secret bulletpoint" aria-hidden="true"></span> brokers present : Yes
                                <br><span class="fa fa-check-square-o bulletpoint" aria-hidden="true"></span> verified posts : No
                                <br><span class="fa fa-list-alt bulletpoint" aria-hidden="true"></span> neighbourhood details : None
                                <br><span class="fa fa-camera-retro bulletpoint" aria-hidden="true"></span> property photos :Some</div>
                        </div>
                        <div class="row buttonsrow"><a class="btn btn-primary downbutton"><span class="fa fa-angle-down" aria-hidden="true"></span></a><a target="_blank" href="http://www.bisell.in/india/real-estate-ads" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a></div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="collapse" data-target="#cardcollapse40">
                    <img class="card-img-top cardlogo" src="(30).png" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Rent2Cash</h4>
                        <p class="card-text">A classifieds site with few houses and apartments listed for rent. painful UI and lack of information in the posts hinder its usefulness.
                        </p>
                      
                        <div class="row buttonsrow">
                    
                            <a target="_blank" href="https://play.google.com/store/apps/details?
                            id=com.rent2cashnew.android" class="btn btn-success visitappbutton"><span class="fa fa-android" aria-hidden="true"></span></a>
                            
                            <a target="_blank" target="_blank" href="http://rent2cash.com/place-on-rent" class="btn btn-success visitsitebutton"><span class="fa fa-external-link" aria-hidden="true"></span>&nbsp; visit site</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card message" data-target="#cardcollapse2016" data-toggle="collapse">
                    <form action="/index.php" method="post" role="form">
                        <div class="card-block message">
                            <h4 class="card-title">Subscribe</h4>
                            <div class="card-text message"> 
                                <br>Other services that you want to see?<br><input type="text" class="form-control" placeholder="eg. beauty services" name="text1" id="text1">Any service provider whom we missed?<br><input type="text" class="form-control" placeholder="eg. rentallistings.com" name="text2" id="text2"></div>
                            <div class="row buttonsrow subscribe">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="you@awesome.com" name="email" id="email"><span class="input-group-btn"><button class="btn btn-secondary gobutton" type="submit">Go!</button></span></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>




    </div>

     <script>   
           /*
            $(".card").hover(function(){
                $(this).children("img.cardlogo").css("-webkit-filter", "grayscale(10%)");
                 $(this).children("img.cardlogo").css("filter", "grayscale(10%)");
                }, function(){
                 $(this).children("img.cardlogo").css("-webkit-filter", "grayscale(100%)");
                 $(this).children("img.cardlogo").css("filter", "grayscale(100%)");
            });
         */
           
          $(".gotohere1").click(function(){
               var offset = 20; //Offset of 20px
            $('html, body').animate({
                scrollTop: $("#companyManagedHouses").offset().top + offset
            }, 2000);      
         });
          $(".gotohere2").click(function(){
               var offset = 20; //Offset of 20px
            $('html, body').animate({
                scrollTop: $("#companyManagedPGs").offset().top + offset
            }, 2000);      
         });
          $(".gotohere3").click(function(){
               var offset = 20; //Offset of 20px
            $('html, body').animate({
                scrollTop: $("#chatBased").offset().top + offset
            }, 2000);      
         });
          $(".gotohere4").click(function(){
               var offset = 20; //Offset of 20px
            $('html, body').animate({
                scrollTop: $("#listings").offset().top + offset
            }, 2000);      
         });
          $(".gotohere5").click(function(){
               var offset = 20; //Offset of 20px
            $('html, body').animate({
                scrollTop: $("#listingAggregators").offset().top + offset
            }, 2000);      
         });
          $(".gotohere6").click(function(){
               var offset = 20; //Offset of 20px
            $('html, body').animate({
                scrollTop: $("#brokers").offset().top + offset
            }, 2000);      
         });
         $(".gotohere7").click(function(){
               var offset = 20; //Offset of 20px
            $('html, body').animate({
                scrollTop: $("#classifieds").offset().top + offset
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